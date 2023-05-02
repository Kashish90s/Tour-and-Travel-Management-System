<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
class contactController extends Controller
{
    //

    public function contact(Request $request){
        if (strlen($request->number) != 10) {
           return view('dashboard')->with(['error' => 'number must be 10']);
        }

        $userdb=new contact();
        $userdb->name=$request->name;
        $userdb->email=$request->email;
        $userdb->number=$request->number;
        $userdb->subject=$request->subject;
        $userdb->message=$request->message;
        $userdb->save();
        // dd($userdb);
        return redirect('/');

    }
}
