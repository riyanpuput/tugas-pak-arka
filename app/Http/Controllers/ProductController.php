<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'Kaos Laravel', 'price' => 150000],
        2 => ['name' => 'Stiker Coding', 'price' => 25000],
        3 => ['name' => 'Notebook Dev', 'price' => 50000],
    ];

    // Menampilkan daftar produk
    public function index(): View
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }
    public function show(string $id): View
{
    // Periksa apakah ID produk ada dalam array
    if (!isset($this->products[$id])) {
        // Handle jika produk tidak ditemukan, contohnya redirect ke halaman error
        abort(404);
    }

    $product = $this->products[$id];
    return view('products.show', compact('product'));
}
}
