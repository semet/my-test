<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('pages.auth.login');
    }

    public function post(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if ($user) {
            return redirect()->route('product.index');
        } else {
            return back()->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('homepage');
    }
}
