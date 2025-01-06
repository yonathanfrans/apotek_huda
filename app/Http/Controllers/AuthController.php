<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->with('role')->first();

        if ($user) {
            if (Auth::attempt($credentials)) {

                if ($user->role_id === 1) {
                    return redirect()->intended('/admin');
                } elseif ($user->role_id === 2) {
                    return redirect()->intended('/profile');
                }

                // return redirect()->intended('/admin');
                $request->session()->regenerate();
            }
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register(Request $request)
    {

        $registData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'role' => 'required',
        ]);

        if ($request->role === 'Karyawan') {
            $registData['role_id'] = 1;
        } elseif ($request->role === 'Customer') {
            $registData['role_id'] = 2;
        }

        User::create($registData);

        return redirect('/login')->with('registerSuccess', 'Registration successful! Please login.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
