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
                    session(['user' => (object) $user]);
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
    public function show(string $id) {}

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
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            // 'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $user = User::findOrFail($request->id);

        $userData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'jenis_kelamin' => $validated['jenis_kelamin'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'alamat' => $validated['alamat'],
        ];

        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($user->image) {
                $oldImagePath = public_path('assets/uploaded/' . $user->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus file image lama
                }
            }

            // Upload image baru
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder public/assets/uploaded
            $image->move(public_path('assets/uploaded'), $imageName);
            $userData['image'] = $imageName; // Update field image
        }

        try {
            // Update produk di database
            $user->update($userData);
            $userUpdate = User::findOrFail($request->id);

            session(['user' => (object) $userUpdate]);


            return response()->json([
                'success' => true,
                'data' => $userUpdate,
                'message' => 'Profile berhasil diperbarui!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memperbarui Profile!'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
