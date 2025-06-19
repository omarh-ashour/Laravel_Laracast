<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        $user = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8)]
        ]);
        if(!Auth::attempt($user))
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match'
            ]);
        request()->session()->regenerate();
        return redirect('/jobs');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}