<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking_user;
use App\Models\user_account;
use PDF;

class PDFController extends Controller
{
    //
    public function generatePDF()
    {
        // $users = booking_user::get();
        $users = booking_user::orderBy('id', 'desc')->first();


        $data = [
            'title' => 'Welcome to Gumphir',
            'date' => date('m/d/Y'),
            'users' => $user
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('UserBooking.pdf');
    }
}
