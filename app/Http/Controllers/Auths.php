<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MasterUser;

class Auths extends Controller
{
    public function registrasi(Request $request)
    {
        $fields = $request->validate([
            'name'      => ['required', 'max:255'],
            'email'     => ['required', 'max:255', 'email', 'unique:users'],
            'password'  => ['required', 'min:6', 'confirmed']
        ]);

        $user = MasterUser::create($fields);

        Auth::login($user);

        return redirect()->route('beranda');
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required']
        ]);

        if (Auth::attempt($fields, $request->remember)) {
            return redirect()->intended();
        } else {
            return back()->withErrors([
                'failed' => 'Email atau Password tidak sesuai.'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('auth/login');
    }
}
