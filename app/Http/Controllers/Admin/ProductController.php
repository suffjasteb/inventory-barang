<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index() {

        $products = Product::with('category')->get();

        return view('pages.products.index', [
            "products" => $products
        ]);
    }

    public function create() {
        $categories = Category::all();
        return view('pages.products.create', [
            "categories" => $categories
        ]);
    }

    public function store(Request $request) {

        $validate = $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'nullable|string',
            'sku' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required'
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'sku' => $request->sku,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id
        ]);
        return redirect('/products');
    }

    public function edit(Product $product) {
        $categories = Category::all();
        return view('pages.products.edit', [
            "product" => $product,
            "categories" => $categories
        ]);
    }

    public function update(Request $request, Product $product) {
        $validate = $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'nullable|string',
            'sku' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required'
        ]);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'sku' => $request->sku,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id
        ]);
        return redirect('/products')->with('success', 'Product has been updated');
    }

    public function delete(Product $product) {
        $product->delete();
        return redirect('/products');
    }
}
