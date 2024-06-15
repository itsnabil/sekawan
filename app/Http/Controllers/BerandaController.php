<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $users = Auth::user()->profil();

        return view('beranda', [
            'title' => 'Beranda',
            'users' => $users
        ]);
    }
}
