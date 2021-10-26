<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $queryModel = Product::all();
        return view('products.grid', ['data' => $queryModel]);
    }

    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('products.create', compact('categories', 'suppliers'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->get('product_name');
        $product->product_production_price = $request->get('product_production_price');
        $product->product_selling_price = $request->get('product_selling_price');
        $product->product_stock = $request->get('product_stock');
        $product->category_id = $request->get("category_id");
        $product->supplier_id = $request->get("supplier_id");
        $product->product_image = "default.png";
        $product->save();

        session()->flash("success", "Success! Product is Stored");
        return redirect()->route("products.index");
    }

    public function show(Product $product)
    {
        return view('products.show', ["data" => $product]);
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
