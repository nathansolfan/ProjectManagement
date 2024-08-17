<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show FORM
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // validate() the data with an array. User::create() the $user
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5|confirmed',
        ]);


        // create new User with validated data
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'user',
        ]);

        // log User
        Auth::login($user);

        return redirect('/');
    }

    // show Login Form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle Login

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);


        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // redirect
            if ($user->role === 'admin') {
                return redirect()->route('home');
            } else {
                return redirect()->route('dashboard');
            }
        }

        // Auth failed
        return back()->withErrors([
            'emaiil' => 'The provided credentials do not match man',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }




}
