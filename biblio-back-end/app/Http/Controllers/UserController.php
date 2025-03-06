<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        $data = request()->validate([
            "name" => ["required", "min:3", "max:20"],
            "email" => ["required", "email", "unique:users"],
            "password" => ["required", "confirmed"],
        ]);
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('home');
    }
}
