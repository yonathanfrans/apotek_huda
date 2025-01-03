<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Mencari pelanggan berdasarkan email
        $pelanggan = Pelanggan::where('email', $request->email)->first();

        // Jika email tidak ditemukan atau password salah
        if (!$pelanggan || !Hash::check($request->password, $pelanggan->password)) {
            return redirect()->back()->withErrors(['login' => 'Email atau password salah.'])->withInput();
        }

        // Jika login berhasil, login ke sistem
        Auth::login($pelanggan);

        // Redirect ke halaman index
        return redirect()->route('index');
    }
}
