<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_account;
class user_controller extends Controller
{
    public function userSignup(Request $request){

         // Check if the email already exists in the database
    $existingUser = user_account::where('email', $request->email)->first();

    if ($existingUser) {
        return response()->json([
            'status' => false,
            'message' => 'Email address already exists',
            'redirect' => 'signup'
        ]);
    }


         // Validate password length
        if (strlen($request->password) !=5) {
            return response()->json([
                'status' => false,
                'message' => 'Password must be at least 5 characters long',
                'redirect' => 'signup'
            ]);
        }
        //check if the password are simiar or not
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
