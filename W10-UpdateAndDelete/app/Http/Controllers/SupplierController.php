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
        return view('suppliers.index', ['data' => $queryModel]);
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        $supplier = new Supplier();
        $supplier->supplier_name = $request->get('supplier_name');
        $supplier->supplier_address = $request->get('supplier_address');
        $supplier->save();

        session()->flash("success", "Success! Supplier is Stored");
        return redirect()->route("suppliers.index");
    }

    public function show(Supplier $supplier)
    {
        //
    }

    public function edit(Supplier $supplier)
    {
        return view("suppliers.edit", compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $supplier->supplier_name = $request->get('supplier_name');
        $supplier->supplier_address = $request->get('supplier_address');
        $supplier->save();

        session()->flash("success", "Success! Supplier is Updated");
        return redirect()->route("suppliers.index");
    }

    public function destroy(Supplier $supplier)
    {
        try {
            $supplier->delete();
            $supplier->products()->delete();

            session()->flash("success", "Success! Supplier is Deleted");
            return redirect()->route("suppliers.index");
        } catch (\PDOException $ex) {
            session()->flash("error", "Please contact our administrator");
            return redirect()->route("suppliers.index");
        }

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
            'msg' => view('suppliers.showmodal', compact('supplier', 'products'))->render()
        ), 200);
    }
}
