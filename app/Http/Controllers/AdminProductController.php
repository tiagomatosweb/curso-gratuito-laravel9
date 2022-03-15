<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    // Mostrar a página de editar
    public function edit()
    {
        return view('admin.product_edit');
    }

    // Recebe requisição para dar update PUT
    public function update()
    {

    }

    // Mostrar página de criar
    public function create()
    {
        return view('admin.product_create');
    }

    // Receber a requisição de criar POST
    public function store()
    {

    }
}
