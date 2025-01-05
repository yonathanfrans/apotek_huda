<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Transaction;

class ProfileController extends Controller
{
    public function getTransactionDetails($orderId)
    {
        try {
            // Ambil status transaksi dari Midtrans
            /**
             * @var object $transactionStatus
             */
            $transactionStatus = Transaction::status($orderId);

            // Ambil data yang diperlukan
            return response()->json([
                'status' => $transactionStatus->transaction_status, // Status pesanan
                'invoice_url' => $transactionStatus->pdf_url,       // Link invoice
                'amount' => $transactionStatus->gross_amount,       // Total pembayaran
            ]);
        } catch (\Exception $e) {
            // Tangani error jika terjadi masalah
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
