<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\rfidModel;
use Illuminate\Support\Facades\Hash;

class RfiduserController extends Controller
{
    //

    public function homepage(){
        return view("home");
    }
    public function index()
    {
        return view('registration');
    }

    // form validation and insert query 

    public function register (Request $request)
    {
        $request->validate(
            [
                'fullname'=>'required',
                'rfid'=>'required',
                'email'=>'required',
                'password'=>'required',
                'repeat_password'=>'required',
            ]
            );
        // echo "<pre>";
        // print_r($request->all());

        // insert query 

        $user = new rfidModel;
        $user->fullname = $request['fullname'];
        $user->rfid = $request['rfid'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect('/login')->with('success','Congratulation You have Register Successfully ');
    }

    public function profile(){
        return view('profile');
    }

}
