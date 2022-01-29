<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function loginForm() {
        return view("login");
    }
    public function registerForm() {
        return view("register");
    }
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->to('/messages');
        }
        return redirect("/login");
    }
    public function logout() {
        Auth::logout();
        return redirect("/");
    }
    public function register(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('/messages');
    }
}
