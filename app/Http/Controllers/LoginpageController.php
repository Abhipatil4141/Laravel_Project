<?php

namespace App\Http\Controllers;

use App\Models\rfidModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use app\http\Controllers\RfiduserController;


class LoginpageController extends Controller
{
    public function login(){
        return view("login-page");
    }

    public function loginAuth(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        
        $user = rfidModel::where('email', $email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('user', $user);
            return redirect('/profile');
        }else{
            return redirect('/login')->withErrors('Invalid Email/Password');
             }
    }
}
























    // public function loginAuth(Request $request) {
    //     $credentials = $request->only('email', 'password');
    //     $user = User::where('email', $credentials['email'])->first();
    
    //     if (Auth::attempt($credentials) && $user) {
    //         return redirect()->route('/profile')->with('success', 'Congratulations! You have logged in successfully.');
    //     } else {
    //         return redirect('/')->with('error', 'Invalid email or password.');
    //     }
    // }
    
    // public function loginAuth(Request $request)
    // {
    //     // Validate the request data
    //     $validator = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
    //     if ($validator){
    //         $username = $request->get('email');
    //         $password = $request->get('password');

    //         $hashed = Hash::make($password);
            
    //         $credentials = array('email' => $username , 'password' => $password);
    //         $attempt = Auth::attempt($credentials);
    //         // $hashed_password = profile::where('profile_mobile_username', $username)->first();
    //         $check = Hash::check($password, $hashed);

    //         if (Auth::attempt($credentials)) {
    //             return view('index');
    //     }
        // // Get email and password from the request
        // $email = $request->input('email');
        // $password = $request->input('password');
        // $password1 = Hash::make($password);

        // // Attempt to authenticate the user
        // if (Auth::attempt(['email' => $email, 'password' => $password1])) {
        //     // Authentication successful

        //     // Retrieve the authenticated user
        //     $user = Auth::rfidModel();

        //     // Log in details
        //     $loggedEmail = $user->email;
        //     $hashedPassword = $user->password;


        //     // Add your code to handle the successful login, such as redirecting to a dashboard
        //     return redirect('/profile');
        // // } 
        // else {
        //     // Authentication failed

        //     // Add your code to handle the failed login, such as redirecting back with an error message
        //     return 'error found in this page';
        // }
    // }
    
    

    // public function loginAuth(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     $user = User::where('email', $credentials['email'])->first();

    //     if ($user && Hash::check($credentials['password'], $user->password) && $user->is_verified) {
    //         // Successful login
    //         // You may want to manually log in the user or perform additional actions

    //         return redirect()->intended('/'); // Redirect to the intended page after login
    //     }

    //     // Invalid login or account not verified
    //     return redirect()->back()->withInput()->withErrors(['error' => 'Invalid login or account not verified.']);
    // }

    // public function loginAuth(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     print_r($credentials);

    //     // Perform your server-side validation/authentication here
    //     // For example, using Laravel's built-in Auth facade
    //     if (auth()->attempt($credentials)) {
    //         return response()->json(['success' => true], 200);
    //     }else
    //     {
    //         return response()->json(['success' => false, 'message' => 'Invalid credentials'], 401);
    //     }
    // }



//     public function loginAuth(Request $request)
//     {
//         $email = $request->input('email');
//         $password = $request->input('password');

//         // Find the user by email
//         $user = User::where('email', $email)->first();

//         // Check if the user exists and the password is correct
//         if ($user && password_verify($password, $user->password)) {
//             return response()->json(['success' => true], 200);
//         }
// else {
//         return response()->json(['success' => false, 'message' => 'Invalid credentials'], 401);
//     }

// }

    // public function loginAuth(Request $request){
    //     $validated = $request->validate(
    //         [
    //             'email'=>'required',
    //             'password'=>'required',
                
    //         ]
    //         );
    //         // dd($validate);
    //         // print_r($validated);
    //         if(Auth::attempt( $validated )){
    //             $request->session()->regenerate();
    //             return redirect()->intended('/profile');
    //         }
    //         else{
    //             echo'Invalid Email/Password';
    //         }

            // if(Hash::check($validated['password'], Auth::user()->password)){
                // if(Auth::attempt( $validated )){
                //         $request->session()->regenerate();
                //         return redirect()->intended('profile');
                //     }
                //     else{
                //         echo'Invalid Email/Password';
                //     }
                // }
                // if(User::where('email', $validated['email'])->first()){
                //         $request->session()->regenerate();
                //         return redirect('profile');

                // }

        //         if(Auth::attempt(( $validated['email']), Hash::check($validated['password']))){

        //             return redirect('profile')->with('success','login successfully');
        // }else{
        //     return redirect('registration')->with('error','login filled');
        // }




        
    
        // $credentials = $request->only('email', 'password');

        // $user = Auth::getProvider()->retrieveByCredentials($credentials);

        // if ($user && Hash::check($credentials['password'], $user->getAuthPassword())) {
        //     // Authentication successful
        //     return redirect()->intended('/profile');
        // } else {
        //     // Authentication failed
        //     return back()->withErrors(['email' => 'Invalid credentials']);
        // }
    

// }
// }

// }