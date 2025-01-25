<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('user')->orderBy('id', 'desc')->get();

        return response()->json($orders);
    }

    public function orderByUser() 
    {
        $user = Auth::user();

        $orderUser = Order::where('user_id', $user->id)->with('product')->get();

        return response()->json($orderUser);
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
        // Validasi input
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'jumlah' => 'required|integer|min:1',
            'alamat' => 'required|string|max:255',
        ]);

        // Ambil user saat ini
        $user = Auth::user();

        // Ambil data produk berdasarkan ID
        $product = \App\Models\Product::find($request->product_id);

        // Hitung total harga berdasarkan kuantitas
        $total = $product->harga * $request->jumlah;

        // Menambahkan biaya pengiriman dan pajak
        $shippingCost = 5000; // Biaya pengiriman
        $tax = 2500; // Pajak tetap

        // Total akhir (harga produk * jumlah) + biaya pengiriman + pajak
        $grandTotal = $total + $shippingCost + $tax;

        // Simpan data ke tabel orders
        $order = Order::create([
            'tag' => uniqid('ORD-'), // Generate tag unik
            'tanggal' => now(),
            'jumlah' => $request->jumlah,
            'alamat' => $request->alamat,
            'status' => 'Pending', // Default status
            'total' => $grandTotal, // Simpan total harga (termasuk biaya pengiriman dan pajak)
            'user_id' => $user->id,
            'product_id' => $request->product_id,
        ]);

        // Redirect ke WhatsApp setelah data tersimpan
        $whatsappMessage = "Halo, saya ingin memesan produk berikut:\n\n" .
            "Atas Nama: " . $user->name . "\n" . 
            "Nama Produk: " . $product->name . "\n" .
            "Jumlah: " . $request->jumlah . "\n" .
            "Alamat: " . $request->alamat . "\n" .
            "Total Harga: Rp " . number_format($grandTotal, 0, ',', '.') . "\n\n" .
            "Terima kasih!";

        return redirect('https://wa.me/6285156857428?text=' . urlencode($whatsappMessage));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::with(['user', 'product', 'discount'])->findOrFail($id);

        return response()->json([
            "success" => true,
            "data" => $order
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
            'status' => 'required',
        ]);

        $order = Order::findOrFail($request->id);

        $orderData = [
            'status' => $validated['status'],
        ];

        // Simpan perubahan
        try {
            // Update produk di database
            $order->update($orderData);

            return response()->json([
                'success' => true,
                'message' => 'Order berhasil diperbarui!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memperbarui order!'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            Order::destroy($request->id);
            return response()->json([
                'success' => true,
                'message' => 'Pesanan berhasil dihapus!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus pesanan!'
            ], 500);
        }
    }
}
