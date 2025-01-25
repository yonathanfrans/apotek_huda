<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        $jumlahPesanan = Order::count(); 
        $jumlahObat = Product::count(); 
        $jumlahPelanggan = User::where('role_id', 2)->count(); 
        $jumlahResep = Recipe::count(); 
        $jumlahVoucher = Discount::count(); 
        return view('admin.admin',  compact('jumlahPesanan', 'jumlahObat', 'jumlahPelanggan', 'jumlahResep', 'jumlahVoucher'));
    }

    public function indexProfile()
    {
        // Langsung menampilkan halaman profil jika sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Menampilkan halaman profil jika sudah login
        return view('profile');
    }
}
