<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function index()
    {
        $queryModel = Supplier::all();
        return view('supplier.index', ['data' => $queryModel]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Supplier $supplier)
    {
        //
    }

    public function edit(Supplier $supplier)
    {
        //
    }

    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    public function destroy(Supplier $supplier)
    {
        //
    }

    public function totalproductpersupplier()
    {
        $data = DB::select(DB::raw(
            "SELECT s.id, s.name, count(s.id) as jumlah
             FROM suppliers s
             INNER JOIN products p ON s.id = p.supplier_id
             GROUP BY s.id, s.name"
        ));

        return view('report.totalproductpersupplier', compact("data"));
    }

    public function showAjax(Request $request)
    {
        $id = $request->get('id');
        $supplier = Supplier::find($id);
        $products = $supplier->products;

        return response()->json(array(
            'msg' => view('supplier.showmodal', compact('supplier', 'products'))->render()
        ), 200);
    }
}
