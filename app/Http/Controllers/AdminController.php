<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function indexProfile()
    {
        // Langsung menampilkan halaman profil jika sudah login
        return view('profile');
    }
}
