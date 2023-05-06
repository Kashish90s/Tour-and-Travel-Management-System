<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_account;
use App\Models\booking_user;
class customer extends Controller
{
    //
    public function viewCustomer() {
        $user =user_account::all();
        // dd(user);
        return view('user', ['data' => $user]);
    }

    public function addUser(Request $request){
        $userdb=new user_account();

        $userdb->fname=$request->fname;
        $userdb->lname=$request->lname;
        $userdb->Contact_Number=$request->Contact_Number;
        $userdb->address=$request->address;
        $userdb->email=$request->email;
        $userdb->password=$request->password;
        // dd($userdb);
        $userdb->save();

        return redirect('admindashboard');
    }



    public function editUser($id){
        $user = user_account::where('id', $id)->first();

        return view('editUser', ['data' => $user]);
    }



    public function updateUser(Request $request, $id){
        $userdb = user_account::where('id', $id)->first();

        $userdb->fname = $request->fname;
        $userdb->lname = $request->lname;
        $userdb->Contact_Number = $request->Contact_Number;
        $userdb->address = $request->address;
        $userdb->email = $request->email;
        $userdb->password = $request->password;

        $userdb->save();

        return redirect('user');
    }




    public function deleteCustomer($id) {
        $user = user_account::where('id', $id)->delete();

        return redirect('user');
    }


    public function adminPannel(){
        $user =user_account::all();
        // dd(user);
        return view('admindash', ['data' => $user]);

    }

    public function recentBooking(){
        $package = booking_user::all();
        // $package = Order::all();
        return view('admindash', ['data' => $package]);
    }

}
