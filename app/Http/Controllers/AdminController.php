<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.admin');
    }

    public function indexProfile() {
        return view('profile');
    }
}
