<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profil;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $users = Auth::user()->profil();

        dd($users);

        return view('beranda', ['title' => 'Beranda']);
    }
}
