<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $queryModel = Category::all();
        return view('categories.index', ['data' => $queryModel]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->get('category_name');
        $category->save();

        session()->flash("success", "Success! Category is Stored");
        return redirect()->route("categories.index");
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view("categories.edit", compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->category_name = $request->get('category_name');
        $category->save();

        session()->flash("success", "Success! Category is Updated");
        return redirect()->route("categories.index");
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();
            $category->listOfProducts()->delete();
            
            session()->flash("success", "Success! Category is Deleted");
            return redirect()->route("categories.index");
        } catch (\PDOException $ex) {
            session()->flash("error", "Please contact our administrator");
            return redirect()->route("suppliers.index");
        }
    }

    public function showCake(Category $category)
    {
        $category_name = $category->name;
        $listOfProducts = $category->listOfProducts;
        $getTotalData = Product::count();

        return view('reports.product', compact('category_name', 'listOfProducts', 'getTotalData'));
    }

    public function totalproductpercategory()
    {
        $queryRaw = DB::select(DB::raw(
            "SELECT categories.id, categories.category_name, count(categories.id) as jumlah 
            FROM categories 
            INNER JOIN products ON categories.id = products.category_id 
            GROUP BY categories.id, categories.category_name"
        ));
        return view("reports.totalproductpercategory", ["data" => $queryRaw]);
    }
}
