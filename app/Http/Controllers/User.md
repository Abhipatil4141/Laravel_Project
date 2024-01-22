<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class User extends Controller
{
    Public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'rfid' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'repeat_password' => 'required|same:password', // Check if repeat_password matches password
        ]);

        $user = new User;
        $user->fullname = $request->input('fullname');
        $user->rfid = $request->input('rfid');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/login')->with('success', 'Congratulations! You have registered successfully.');
    }

    public function index()
    {
        return view('registration');
    }

}
