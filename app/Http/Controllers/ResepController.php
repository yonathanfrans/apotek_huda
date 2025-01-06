<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep; // Import model Resep
use App\Http\Controllers\Controller; // Import Controller
use Illuminate\Support\Facades\Auth;

class ResepController extends Controller
{
    public function uploadResep(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'keterangan' => 'required|string|max:300',
        ]);

        $file = $request->file('gambar');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $filename, 'public');
        $userLogin = Auth::user();
        

        $resep = new Resep();
        $resep->user_id = $userLogin->id; // Diisi id user yang login, karena agar tahu siapa yg bikin resep
        $resep->gambar = $filename;
        $resep->keterangan = $request->input('keterangan');
        $resep->save();

        return response()->json(['success' => true, 'filename' => $filename]);
    }
}
