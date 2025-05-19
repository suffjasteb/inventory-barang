<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLogin() {
        return view('pages.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if (auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('products.index'); // redirect to index
        }
        // else
        return back()->withErrors("email or password is wrong");
    }
}   
