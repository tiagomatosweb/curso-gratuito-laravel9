<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    // Mostrar a página de editar
    public function edit(Product $product)
    {
        return view('admin.product_edit', [
            'product' => $product
        ]);
    }

    // Recebe requisição para dar update PUT
    public function update(Product $product, Request $request)
    {
        $input = $request->validate([
            'name' => 'string|required',
            'price' => 'string|required',
            'stock' => 'integer|nullable',
            'cover' => 'file|nullable',
            'description' => 'string|nullable',
        ]);
        if (!empty($input['cover']) && $input['cover']->isValid()) {
            $file = $input['cover'];
            $path = $file->store('products');
            $input['cover'] = $path;
        }

        $product->fill($input);
        $product->save();
        return Redirect::route('admin.products');
    }

    // Mostrar página de criar
    public function create()
    {
        return view('admin.product_create');
    }

    // Receber a requisição de criar POST
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'string|required',
            'price' => 'string|required',
            'stock' => 'integer|nullable',
            'cover' => 'file|nullable',
            'description' => 'string|nullable',
        ]);
        $input['slug'] = Str::slug($input['name']);

        if (!empty($input['cover']) && $input['cover']->isValid()) {
            $file = $input['cover'];
            $path = $file->store('products');
            $input['cover'] = $path;
        }

        Product::create($input);

        return Redirect::route('admin.products');
    }
}
