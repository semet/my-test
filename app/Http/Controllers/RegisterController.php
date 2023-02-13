<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('pages.auth.register');
    }

    public function post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        Auth::login($user);

        return redirect()->intended('/product');
    }
}
