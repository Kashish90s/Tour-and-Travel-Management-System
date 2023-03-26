<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_account;
class user_controller extends Controller
{
    public function userSignup(Request $request){

        if ($request->password == $request->confirmpassword) {

            $userdb=new user_account();
            $userdb->fname=$request->fname;
            $userdb->lname=$request->lname;
            $userdb->email=$request->email;
            $userdb->password=$request->password;

            $userdb->save();

            return response()->json([
                'status' => true,
                'message' => 'Users Registered Successfully',
                'redirect' => '/'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Password Does not Match',
                'redirect' => 'signup'
            ]);
        }
    }
}
