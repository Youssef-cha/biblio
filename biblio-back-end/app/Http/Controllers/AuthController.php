<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => ['required' , 'max:255'],
            'email' => ['required' , 'email'],
            'password' => ['required' , 'confirmed'],
        ]);
        $user = User::create($fields);
        $token = $user->createToken($user->name);
        return ['token' => $token->plainTextToken];
    }
    public function login(Request $request) {
        $request->validate([
            'email' => ['required' , 'email'],
            'password' => ['required'],
        ]);

        $user = User::where("email", $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return ['message' => 'those credentials do not match'];
        }
        $token = $user->createToken($user->name);
        return ['token' => $token->plainTextToken];
    }
    public function logout(Request $request) {
        $request->user()->tokens()->delete();
        return ['message' => 'you are logged out'];
    }
}
