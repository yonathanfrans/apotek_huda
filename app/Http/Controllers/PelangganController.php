<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PelangganController extends Controller
{
    // Menampilkan halaman register
    public function create()
    {
        return view('register');
    }

    // Menyimpan data pelanggan ke database
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|string|max:120',
                'username' => 'required|string|max:20|unique:pelanggan',
                'jenis_kelamin' => 'required|string',
                'tgl_lahir' => 'required|date',
                'email' => 'required|email|unique:pelanggan',
                'nomor_telepon' => 'required|string|max:15|unique:pelanggan', // Menambahkan validasi unique untuk nomor telepon
                'alamat' => 'required|string',
                'password' => 'required|string|min:8',
            ],
            [
                'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',
                'username.unique' => 'Username sudah digunakan, silakan pilih yang lain.',
                'nomor_telepon.unique' => 'Nomor telepon sudah terdaftar, silakan gunakan nomor lain.', // Pesan error untuk nomor telepon
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Simpan data pelanggan
        Pelanggan::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ]);

        // Redirect setelah berhasil mendaftar
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }
}
