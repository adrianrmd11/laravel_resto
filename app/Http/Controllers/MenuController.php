<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Menu makanan cepat saji
        $menus = [
            ['nama' => 'Chicken Burger', 'harga' => 30000],
            ['nama' => 'Double Cheeseburger', 'harga' => 35000],
            ['nama' => 'Fried Chicken (2 pcs)', 'harga' => 40000],
            ['nama' => 'French Fries (Large)', 'harga' => 15000],
            ['nama' => 'Spaghetti Bolognese', 'harga' => 25000],
            ['nama' => 'Coca Cola (Medium)', 'harga' => 10000],
            ['nama' => 'Vanilla Sundae', 'harga' => 12000],
            ['nama' => 'Nuggets (6 pcs)', 'harga' => 22000],
            ['nama' => 'Zinger Rice Box', 'harga' => 28000],
        ];

        return view('menu', compact('menus'));
    }
}
