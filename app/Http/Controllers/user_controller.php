<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_account;
class user_controller extends Controller
{
    public function checkEmail($email) {
        $existingUser = user_account::where('email',$email)->first();
        // dd( $existingUser);
        return $existingUser;
    }

    public function userSignup(Request $request){

        $existingUser = user_account::where('email', $request->email)->first();
        if ($existingUser) {
            return response()->json([
                'status' => false,
                'message' => 'Users Already Registered with that Email',
                'redirect' => '#'
            ]);
        };

        $userdb=new user_account();
        $userdb->fname=$request->fname;
        $userdb->lname=$request->lname;
        $userdb->email=$request->email;
        $userdb->password=$request->password;

        $userdb->save();

        return response()->json([
            'status' => true,
            'message' => 'Users Registered Successfully',
            'redirect' => 'verify'
        ]);
    }
}
