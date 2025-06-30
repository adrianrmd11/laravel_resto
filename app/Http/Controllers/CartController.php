<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'action' => 'required|in:increase,decrease',
        ]);

        $cart = session()->get('cart', []);
        $nama = $request->nama;
        $harga = $request->harga;
        $action = $request->action;

        if (isset($cart[$nama])) {
            if ($action === 'increase') {
                $cart[$nama]['jumlah']++;
            } elseif ($action === 'decrease') {
                $cart[$nama]['jumlah']--;
                if ($cart[$nama]['jumlah'] <= 0) {
                    unset($cart[$nama]);
                }
            }
        } else {
            if ($action === 'increase') {
                $cart[$nama] = [
                    'nama' => $nama,
                    'harga' => $harga,
                    'jumlah' => 1
                ];
            }
        }

        session(['cart' => $cart]);

        return response()->json([
            'items' => array_values($cart),
            'total_items' => array_sum(array_column($cart, 'jumlah')),
            'qty' => isset($cart[$nama]) ? $cart[$nama]['jumlah'] : 0
        ]);
    }
}
