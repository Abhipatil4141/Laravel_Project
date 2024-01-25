<?php

namespace App\Http\Controllers;

use App\Models\Apidata;
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

    public function profileInfo(Request $request)
    {
        $user = $request->session()->get('user');

        // Assuming 'rfid' is the RFID field in both tables
        $rfid = $user->rfid;

        // Check if the RFID exists in the datapackets table
        $datapacket = Apidata::where('rfidno', $rfid)->first();

        if ($datapacket) {
            // RFID found in the datapackets table, pass the datapacket data to the view
            return view('userInfo', ['user' => $user, 'datapacket' => $datapacket]);
        } else {
            // RFID not found in the datapackets table
            return view('userInfo', ['user' => $user, 'error' => 'RFID not found in datapackets']);
        }
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
        $request->session()->flush();

        // Redirect to the login page after logout

        return view('home');
    }


    // for profile of user 
    // public function profileInfo(Request $request)
    // {
    //     $user = $request->session()->get('user');

    //     return view('userInfo', ['user' => $user]);
    // }

    public function profileUpdate(Request $request){
        $id = $request->input('id');
        rfidModel::where('id', $id)->update([
            'fullname'=> $request->input('fullname'),
            'email'=> $request->input('email'),
            'rfid'=> $request->input('rfid'),
            'phone'=> $request->input('phone'),
        ]);

        return redirect()->back();
    
        
    }
    
}