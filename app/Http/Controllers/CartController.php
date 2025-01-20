<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Discount;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function updateQuantity(Request $request, $productId)
    {
        $quantity = $request->input('quantity');
        $cart = session('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity; // Update kuantitas produk di session
        }

        session(['cart' => $cart]);

        return response()->json(['success' => true]);
    }

    public function showCheckout(Request $request)
{
    $cartItems = session()->get('cart', []);
    $user = Auth::user();

    // Menghitung total biaya produk
    $total = 0;
    foreach ($cartItems as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    // Menghitung biaya pengiriman dan pajak
    $shippingCost = 5000; // Biaya pengiriman
    $tax = 2500; // Pajak tetap

    // Ambil kode voucher yang dipilih (dari request)
    $voucherCode = $request->input('voucher');
    $discountAmount = 0;

    if ($voucherCode) {
        // Mencari voucher yang sesuai dengan kode yang diberikan dan status aktif
        $voucher = Discount::where('kode', $voucherCode)->where('status', 'active')->first();

        if ($voucher) {
            // Menghitung diskon berdasarkan persentase
            $discountAmount = ($voucher->discount_percentage / 100) * $total;
        }
    }

    // Menghitung total grand total setelah diskon
    $grandTotal = $total + $shippingCost + $tax - $discountAmount;

    // Mengirim data ke view checkout
    return view('checkout', compact('cartItems', 'total', 'shippingCost', 'tax', 'grandTotal', 'user', 'discountAmount'));
}



    // Menampilkan keranjang
    public function index()
    {
        return view('cart');
    }

    // Menambahkan produk ke keranjang
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Produk tidak ditemukan');
        }

        $cart = session('cart', []);

        if (!isset($cart[$productId])) {
            $cart[$productId] = [
                'id' => $product->id, // Simpan ID produk
                'name' => $product->name,
                'price' => $product->harga,
                'image' => $product->gambar,
                'quantity' => 1,
            ];
        }

        session(['cart' => $cart]);

        return redirect()->route('cart')->with('success', 'Produk berhasil ditambahkan ke keranjang');
    }

    // Menghapus produk dari keranjang
    public function remove($productId)
    {
        $cart = session('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]); // Menghapus produk dari keranjang
        }

        session(['cart' => $cart]);

        return redirect()->route('cart')->with('success', 'Produk berhasil dihapus dari keranjang');
    }
}
