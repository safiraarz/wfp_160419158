<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $queryRaw= DB::select(DB::raw("select* from categories"));
        $queryBuilder = DB::table('categories')->get();
        // $queryModel = Product::all();
        // dd($queryModel);
        return view('category.index', ['data' => $queryBuilder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Category();
        $data->name = $request->get('name');
        $data->description = $request->get('description');
        $data->save();
        return redirect()->route('category.index')->with('status', 'Category is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        $category = Category::find($category);
        // dd($category);
        return view('category.edit',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
        $category = Category::find($category);
        // dd($category);
        $category->name = $request->get('name');
        $category->save();
        return redirect()->route('medicine.index')->with('status', 'Success Update '.$request->get('name').' Category' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        //
    }

    public function showProducts()
    {
        $data = DB::find($_POST['category_id']);
        $nama = $data->name;
        $data_product = $data->products;
        return response()->json(
            array(
                'status' => 'oke',
                'msg' => view('category.showProduct', compact('nama', 'data_product'))->render()
            ),
            200
        );
    }
}
