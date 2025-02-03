<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function login()
    {
        $data = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (!Auth::attempt($data, request()->remember)) {
            throw ValidationException::withMessages([
                'email' => 'Invalid email or password'
            ]);
        }
        return redirect('/');
    }
}
