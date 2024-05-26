<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function showOrderDetail(Request $request)
    {
        // Retrieve cart items from the session
        $cart = session('cart', []);
        // Retrieve table number from the session
        $tableNumber = session('table_number', ''); // Default to an empty string if not set

        // Calculate total price
        $totalPrice = array_reduce($cart, function($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        // Pass cart items, total price, and table number to the view
        return view('pelanggan.detail', [
            'cart' => $cart,
            'totalPrice' => $totalPrice,
            'tableNumber' => $tableNumber
        ]);
    }
}
