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
        return view('products.grid', ['data' => $queryModel, 'categories' => Category::all(), 'suppliers' => Supplier::all()]);
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
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view("products.edit", compact('product', 'categories', 'suppliers'));
    }

    public function update(Request $request, Product $product)
    {
        $product->product_name = $request->get('product_name');
        $product->product_production_price = $request->get('product_production_price');
        $product->product_selling_price = $request->get('product_selling_price');
        $product->product_stock = $request->get('product_stock');
        $product->category_id = $request->get("category_id");
        $product->supplier_id = $request->get("supplier_id");
        $product->save();

        session()->flash("success", "Success! Product is Updated");
        return redirect()->route("products.index");
    }

    public function destroy(Product $product)
    {
        $this->authorize('delete-product-permission', $product);

        $product->delete();
        session()->flash("success", "Success! Product is Deleted");
        return redirect()->route("products.index");
    }

    public function getModalEdit(Request $request)
    {
        $id = $request->get('id');
        $product = Product::find($id);
        $categories = Category::all();
        $suppliers = Supplier::all();
        return response()->json(array(
            'msg' => view('products.modalEdit', compact('product', 'categories', 'suppliers'))->render()
        ), 200);
    }

    public function getModalEditNoReload(Request $request)
    {
        $id = $request->get('id');
        $product = Product::find($id);
        $categories = Category::all();
        $suppliers = Supplier::all();
        return response()->json(array(
            'msg' => view('products.modalEditNoReload', compact('product', 'categories', 'suppliers'))->render()
        ), 200);
    }
    
    public function updateProductNoReload(Request $request)
    {
        $id = $request->get('id');
        $product = Product::find($id);
        $product->product_name = $request->get('product_name');
        $product->product_production_price = $request->get('product_production_price');
        $product->product_selling_price = $request->get('product_selling_price');
        $product->product_stock = $request->get('product_stock');
        $product->category_id = $request->get("product_category_id");
        $product->supplier_id = $request->get("product_supplier_id");
        $product->save();
        return response()->json(array(
            'msg' => "Data Product Updated"
        ), 200);
    }
    
    public function deleteProductNoReload(Request $request)
    {
        try {
            $id = $request->get('id');
            $product = Product::find($id);

            $product->delete();

            return response()->json(array(
                'status' => 'success',
                'msg' => "Data Product Success"
            ), 200);
        } catch (\PDOException $ex) {
            return response()->json(array(
                'status' => 'error',
                'msg' => "Delete Product error : " . $ex
            ), 200);
        }
    }
}
