<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('loginadmin');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->with('loginError', 'Login failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/loginadmin');
    }
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);
        // $profile = Profile::first()->get();
        // $profile->name = $request->name;
        // $profile->email = $request->email;
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/loginadmin')->with('success', 'Registration Succesfull! Please Login');
    }
}
