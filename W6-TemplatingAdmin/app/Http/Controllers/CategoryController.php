<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryModel = Category::all();
        return view('category.index', ['data'=>$queryModel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function showCake($category_name){
        // $data = DB::table('categories')
        //         ->join('products', 'categories.id', '=', 'products.category_id')
        //         ->where('categories.category_name', $category_name)
        //         ->get();
        // $getTotalData = DB::table('products')->count();
        $data = Category::where('category_name', $category_name)->first();
        $listOfProducts = $data->listOfProducts;
        $getTotalData = Product::count();
        
        return view('report.product', compact('category_name', 'listOfProducts', 'getTotalData'));
    }

    public function categoryMinPrice(){
        $minPrice = Product::select('category_id', DB::raw('MIN(product_selling_price) as min_price'))
                    ->groupBy('category_id');
        $averagePrice = Product::select('category_id', DB::raw('AVG(product_selling_price) as avg_price'))
                    ->groupBy('category_id');
        $categories = Category::joinSub($minPrice, '');
    }

}
