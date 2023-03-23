<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_user;
class admin_controller extends Controller
{
    //
    public function adminlogin(Request $request)
    {
        try {
            $user = admin_user::where('email', $request->email)->where('password',$request->password)->first();
            if($user){
                session()->put('email',$user['email']);
                return view('/dashboard');
            }else{
                return redirect('admin')->with('error','wrong password or email!!');
            }

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


}

