<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking_user;
use App\Models\package;

class booking_controller extends Controller
{
    public function showPackages() {
        $package = package::all();

        return view('dashboard', ['info'=> $package]);
    }

    public function showBookingPage($id) {
        $package = package::where('id', $id)->first();

        return view('booking', ['info'=>$package]);
    }

    public function destination(Request $request){

        $userdb=new booking_user();
        $userdb->destination=$request->destination;
        $userdb->no_guest=$request->guest;
        $userdb->arrival=$request->arrival;
        $userdb->leaving=$request->leaving;

        $userdb->save();
        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    //    dd($userdb);
        // return response()->json([
        //     'status' => true,
        //     'message' => 'destination booking Successfully',
        //     'redirect' => '#'
        // ]);


    }
}
