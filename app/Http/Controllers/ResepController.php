<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep; // Import model Resep
use App\Http\Controllers\Controller; // Import Controller

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

        $resep = new Resep();
        $resep->id_pelanggan = 1; // Misalnya, ID pelanggan di sini
        $resep->gambar = $filename;
        $resep->keterangan = $request->input('keterangan');
        $resep->save();

        return response()->json(['success' => true, 'filename' => $filename]);
    }
}
