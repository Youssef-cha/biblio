<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function show(){
        return view("profiles.show");
    }
    public function password_reset(){
        return view("profiles.passwordReset");
    }

    public function password_update(){
        request()->validate([
            'old_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
        if(Auth::attempt(['email' => Auth::user()->email, 'password' => request('old_password')])){
            Auth::user()->update(['password' => request('password')]);
            return redirect()->route('profiles.show');
        }else{
            throw ValidationException::withMessages([
                'old_password' => 'Old password is incorrect'
            ]);
        }

        return view("profiles.passwordReset");
    }
    public function edit(){
        return view("profiles.edit");
    }
    public function update(){
        $data = request()->validate([
            'name' => ['required'],
            'email' => ['required', ''],
            'bio' => ['required', 'min:10'],
            'tel' => ['required', 'numeric'],
        ]);
        Auth::user()->update($data);
        return redirect()->route('profiles.show');
    }
}
