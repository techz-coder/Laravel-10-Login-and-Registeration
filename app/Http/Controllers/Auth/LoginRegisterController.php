<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// add some more use methods to attach files
use App\Models\User;
//use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;



class LoginRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }


    // for register form it will show register form

    public function register()
    {
        return view('auth.register');
    }


    // for store data into the database it will store

    public function store(Request $request)
    {

        // it will validate all inputs it's working like html tags like input take required and data type 

        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        // this is for  the user creation method first validate and then create using 
        // create method and associative array.

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();

        return redirect()->route('dashboard')->withsuccess('you have already registerd & logged in!');
    }

    // now login form function

    public function login()
    {
        return view('auth.login');
    }


    // now for authentication form function

    public function authenticate(Request $request)
    {

        // first check validate all inputs for forward
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // then authenticate
        // if user data mathed then forward to dashboard
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withsuccess('you have successfully logged in!');
        }

        // else show the error for on email
        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records',
        ])->onlyInput('email');
    }


    // dashboard function
    public function dashboard()
    {
        // if authentication is checked then show dashbord page
        if (Auth::check()) {
            return view('auth.dashboard');
        }
        // else show error with login error
        return redirect()->route('login')->withErrors([
            'email' => 'please login to access the dashboard',
        ])->onlyInput('email');
    }

    // and the last logout function for logging out

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->withsuccess('you have logged out successfully');
    }
}
