<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductsForUser()
    {
        $products = Product::with('category')->get();

        // Pastikan view mengarah ke file product.blade.php
        return view('product', compact('products'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->orderBy('id', 'desc')->get();

        return response()->json($products);
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
        $validated = $request->validate([
            'name' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'tanggal_obat_dibuat' => 'required',
            'tanggal_obat_expired' => 'required',
            'category_id' => 'required',
        ]);

        $productData = [
            'name' => $validated['name'],
            'harga' => $validated['harga'],
            'stok' => $validated['stok'],
            'deskripsi' => $validated['deskripsi'],
            'tanggal_obat_dibuat' => $validated['tanggal_obat_dibuat'],
            'tanggal_obat_expired' => $validated['tanggal_obat_expired'],
            'category_id' => $validated['category_id'],
        ];

        if ($request->hasFile('gambar')) {

            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder public/assets/uploaded
            $image->move(public_path('assets/uploaded'), $imageName);
            $productData['gambar'] = $imageName;
        }


        try {
            Product::create($productData);
            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil ditambahkan!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan!'
            ], 500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return response()->json([
            "success" => true,
            "data" => $product,
            "categories" => $category
        ]);
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
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'tanggal_obat_dibuat' => 'required',
            'tanggal_obat_expired' => 'required',
            'category_id' => 'required',
        ]);
        

        // Cari produk berdasarkan ID
        $product = Product::findOrFail($request->id);

        $productData = [
            'name' => $validated['name'],
            'harga' => $validated['harga'],
            'stok' => $validated['stok'],
            'deskripsi' => $validated['deskripsi'],
            'tanggal_obat_dibuat' => $validated['tanggal_obat_dibuat'],
            'tanggal_obat_expired' => $validated['tanggal_obat_expired'],
            'category_id' => $validated['category_id'],
        ];


        // Jika ada gambar yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($product->gambar) {
                $oldImagePath = public_path('assets/uploaded/' . $product->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus file gambar lama
                }
            }

            // Upload gambar baru
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder public/assets/uploaded
            $image->move(public_path('assets/uploaded'), $imageName);
            $productData['gambar'] = $imageName; // Update field gambar
        }

        // Simpan perubahan
        try {
            // Update produk di database
            $product->update($productData);

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil diperbarui!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memperbarui produk!'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        
        try {
            Product::destroy($request->id);
            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil dihapus!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus produk!'
            ], 500);
        }
    }
}
