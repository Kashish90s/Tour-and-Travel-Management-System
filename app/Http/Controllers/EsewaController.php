<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Order;
use App\Models\user_account;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Session;
use Mail;
// init composer autoloader.
require '../vendor/autoload.php';

use Cixware\Esewa\Client;
use Cixware\Esewa\Config;

class EsewaController extends Controller
{

    //
    public function esewaPay(Request $request)
    {
        $pid = uniqid();
        $amount = $request->price;

        $user = user_account::where('id', session('id'))->first();

        Order::insert([
            'user_id' => $user->id,
            'name' => $user->fname." ".$user->lname,
            'email' => $user->email,
            'product_id' => $pid,
            'amount' => $amount,
            'esewa_status' => 'unverified',
            'created_at' => Carbon::now(),
        ]);

        session()->put('email', $user->email);
        $userr['to']=$email = session()->get('email');

        Mail::send('esewaPayment', [],function($messages) use ($userr){
            $messages->to($userr['to']);
            $messages->subject('Booking Confirmation');
        });



        // set success and failure callback urls
        $successUrl = url('/success');
        $failureUrl = url('/failure');

        // config for development
        $config = new Config($successUrl, $failureUrl);


        // initialize eSewa client
        $esewa = new Client($config);

        $esewa->process($pid, $amount, 0, 0, 0);
    }


    public function esewaPaySuccess(){



        //do when pay success.
        $pid = $_GET['oid'];
        $refId = $_GET['refId'];
        $amount = $_GET['amt'];

        $order = Order::where('product_id', $pid)->first();
        //dd($order);
        $update_status = Order::find($order->id)->update([
            'esewa_status' => 'verified',
            'updated_at' => Carbon::now(),
        ]);
        if ($update_status) {

            $msg = 'Success';
            $msg1 = 'Payment success. Thank you for booking trip with us.';
            return view('thankyou', compact('msg', 'msg1'));
        }

        // session()->put('email', $user->email);
        // $order = Order::where('email',$email)->first()
        // $userr['to']=Order::where('email',$email)->first();


        // Mail::send('esewaPayment', [],function($messages) use ($userr){
        //     $messages->to($userr['to']);
        //     $messages->subject('Your payment sucessful');
        // });


    }

    public function esewaPayFailed()
    {
        //do when payment fails.
        $pid = $_GET['pid'];
        $order = Order::where('product_id', $pid)->first();
        //dd($order);
        $update_status = Order::find($order->id)->update([
            'esewa_status' => 'failed',
            'updated_at' => Carbon::now(),
        ]);
        if ($update_status) {
            //send mail,....
            //
            $msg = 'Failed';
            $msg1 = 'Payment is failed. Contact admin for support.';
            return view('thankyou', compact('msg', 'msg1'));
        }
    }
}
