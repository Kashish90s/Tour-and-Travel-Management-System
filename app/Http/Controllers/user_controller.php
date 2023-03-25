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

    public function changePassword(Request $request) {
        $query = user_account::where('email', session('email'))->where('password', $request->oldPassword)->first();

        if ($query) {
            if ($request->newPassword == $request->confirmPassword) {

                $query->password=$request->newPassword;

                $query->save();

                return response()->json([
                    'status' => true,
                    'message' => 'Password Changed Successfully',
                    'redirect' => 'profile'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Enter the Same Password on the New Password and Confirm Password Field',
                    'redirect' => '#'
                ]);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Password does not Match',
                'redirect' => '#'
            ]);
        }
    }

    public function changeDetails(Request $request) {
        session()->put('email', $request->email);
        session()->put('fname', $request->fname);
        session()->put('lname', $request->lname);

        $userdb = user_account::where('email', session('email'));
        $userdb->fname=$request->fname;
        $userdb->lname=$request->lname;
        $userdb->email=$request->email;

        return response()->json([
            'status' => true,
            'message' => 'Details Changed Successfully',
            'redirect' => 'profile'
        ]);
    }
}
