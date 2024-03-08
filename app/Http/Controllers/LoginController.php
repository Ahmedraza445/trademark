<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('layouts.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if ($email === 'ahmed@gmail.com' && $password === '54321') {

            Session::put('user', [
                'email' => $email,
                'password' => $password
            ]);

            return redirect('/adminPortal');
        }

        return redirect()->route('login')->with('status', 'Invalid email or password');
    }
    public function logout()
    {
        // Clear user data from the session
        Session::forget('user');

        // Optionally, you can use the following line to completely flush the session data
        Session::flush();

        return redirect('/login');
    }
}
