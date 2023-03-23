<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_account;
class user_controller extends Controller
{
    public function userlogin(Request $request)
    {
        try {

            $user = user_account::where('email', $request->email)->where('password',$request->password)->first();
            if($user){
                return view('/dashboard');
            }else{
                return redirect('loginn')->with('error','wrong password or email!!');
            }


        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


    public function userSignup(Request $request){
        $userdb=new user_account();
        $userdb->fname=$request->fname;
        $userdb->lname=$request->lname;
        $userdb->email=$request->email;
        $userdb->password=$request->password;

        $userdb->save();


    }
}
