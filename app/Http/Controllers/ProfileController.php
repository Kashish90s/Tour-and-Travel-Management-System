<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\user_account;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit()
    {
        // finding and storing the user information by fetching from the database
        $query = user_account::find(session('id'));

        // returning to the view page with the user information
        return view('profile-setting', [
            // key => value
            'user' => $query,
        ]);
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

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {

        $userdb = user_account::find(session('id'));

        $userdb->fname = $request->fname;
        $userdb->lname = $request->lname;
        $userdb->Contact_Number = $request->number;
        $userdb->address = $request->address;
        $userdb->email = $request->email;

        $userdb->save();

        return response()->json([
            'status' => true,
            'message' => 'Details Changed Successfully',
            'redirect' => 'profile'
        ]);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
