<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $authenticated = Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']]);


        if ($authenticated) {
            $request->session()->regenerate();

            return to_route('home');
        }

        return to_route('login')->with('fail', 'Incorrect Email or Password');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('home');
    }
}
