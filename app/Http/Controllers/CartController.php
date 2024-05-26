<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);

        $cart = session()->get('cart', []);

        // Periksa apakah produk sudah ada di keranjang
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            // Jika belum, tambahkan produk ke keranjang
            $cart[$productId] = [
                "name" => $product->nama,
                "price" => $product->harga,
                "quantity" => 1,
                "img" => $product->img
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('pelanggan.cart', compact('cart'));
    }

    public function removeFromCart($productId)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Produk berhasil dihapus dari keranjang!');
    }

    public function clearCart()
    {
        session()->forget('cart');
        return back()->with('success', 'Keranjang berhasil dikosongkan!');
    }

    public function selectTable(Request $request)
    {
        $tableNumber = $request->input('table_number');
        // Store the table number in the session
        session(['table_number' => $tableNumber]);
        return redirect()->back()->with('success', 'Nomor meja telah dipilih: ' . $tableNumber);
    }

    public function clear()
    {
        // Assuming you are using a session to store the cart items
        session()->forget('cart');

        // Redirect back to the cart view or any other page
        return redirect()->route('cart.view');
    }



}