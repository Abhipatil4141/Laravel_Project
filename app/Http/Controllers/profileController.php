<?php

namespace App\Http\Controllers;

use App\Models\rfidModel;
use Illuminate\Http\Request;

class profileController extends Controller
{


    private function getUserData()
    {
        // Retrieve user ID from the session or wherever it's stored
        $userId = session('user_id'); // Adjust this based on your implementation

        // Retrieve user based on the user ID
        $user = rfidModel::find($userId); // Make sure to import the User model

        return $user;
    }



    public function userdata(Request $request)
    {
        $user = $request->session()->get('user');
        // dd($user);

        return view('profile', ['user' => $user]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user'); // Clear the user session data

        // Redirect to the login page after logout

        return view('logout-page');
    }


    // for profile of user 
    public function profileInfo(Request $request)
    {
        $user = $request->session()->get('user');

        return view('userInfo', ['user' => $user]);
    }
}
