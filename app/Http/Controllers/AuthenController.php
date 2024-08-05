<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthenController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function handleLogin()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            /**
             * @var User $user
             */

            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('member.dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function showRegisterForm()
    {

        return view('auth.register');
    }

    public function handleRegister()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',


        ]);
        $user = User::query()->create($data);

        Auth::login($user);

        request()->session()->regenerate();

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('login');
    }
}
