<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();

        return view('admin.product', ['products' => $products]);
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
        $productData = $request->validate([
            'name' => 'required',
            'gambar' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'tanggal_obat_dibuat' => 'required',
            'tanggal_obat_expired' => 'required',
            'category_id' => 'required',
        ]);

        Product::create($productData);

        return redirect()->back()->with('success', 'Data reated successfully!');
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
    public function update(Request $request)
    {
        $request->validate([
            'id' => '',
            'name' => 'required',
            'gambar' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'tanggal_obat_dibuat' => 'required',
            'tanggal_obat_expired' => 'required',
            'category_id' => 'required',
        ]);

        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->gambar = $request->gambar;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->deskripsi = $request->deskripsi;
        $product->tanggal_obat_dibuat = $request->tanggal_obat_dibuat;
        $product->tanggal_obat_expired = $request->tanggal_obat_expired;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->back()->with('success', 'Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Product::destroy($request->id);

        return redirect()->back()->with('success', 'Data has been deleted');
    }
}
