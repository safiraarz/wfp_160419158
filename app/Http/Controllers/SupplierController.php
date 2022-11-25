<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Supplier::all();
        return view('supplier.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Supplier();
        $data->name = $request->get('name');
        $data->address = $request->get('address');
        $data->save();

        return redirect()->route('suppliers.index')->with('status', 'Supplier is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        // dd($supplier);
        // $data = $supplier;
        // return view('supplier.edit',compact('data'));
        return view('supplier.edit', ['supplier' => $supplier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->name = $request->get('name');
        $supplier->address = $request->get('address');
        $supplier->save();
        return redirect()->route('suppliers.index')->with('status', 'Success Update Supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        // dd($supplier);
        try {
            $supplier->delete();
            return redirect()->route('suppliers.index')->with('status', 'Success delete supplier');
        } catch (\Throwable $th) {
            $msg = "Failed to delete supplier";
            return redirect()->route('suppliers.index')->with('status', 'Error ' . $msg);
        }
    }
    public function getEditForm(Request $request)
    {
        $id = $request->get('id');
        $data = Supplier::find($id);
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('supplier.getEditForm', compact('data'))->render()
        ), 200);
    }
    public function getEditForm2(Request $request)
    {
        $id = $request->get('id');
        $data = Supplier::find($id);
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('supplier.getEditForm2', compact('data'))->render()
        ), 200);
    }
    public function saveData(Request $request)
    {
        $id = $request->get('id');
        $Supplier = Supplier::find($id);
        $Supplier->name = $request->get('name');
        $Supplier->address = $request->get('address');
        $Supplier->save();
        return response()->json(
            array(
                'status' => 'ok',
                'msg' => 'supplier data updated'
            ),
            200
        );
    }
    public function deleteData(Request $request)
    {
        try {
            $id = $request->get('id');
            $Supplier = Supplier::find($id);
            $Supplier->delete();
            return response()->json(array(
                'status' => 'ok',
                'msg' => 'supplier data deleted'
            ), 200);
        } catch (\PDOException $e) {
            return response()->json(array(
                'status ' => ' error',
                'msg' => 'supplier is not deleted. It may be used in the product'
            ), 200);
        }
    }
}
