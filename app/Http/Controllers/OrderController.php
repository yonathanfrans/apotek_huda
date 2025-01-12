<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::with(['user', 'products', 'discount'])->findOrFail($id);

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
