<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $queryRaw= DB::select(DB::raw("select* from categories"));
        $queryBuilder = DB::table('products')->get();
        $queryModel = Category::all();
        // dd($queryModel);
        // dd($queryBuilder);
        return view('product.index', ['data' => $queryBuilder, "category" => $queryModel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('product.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product();
        $data->generic_name = $request->get('generic_name');
        $data->description = $request->get('description');
        $data->form = $request->get('form');
        $data->restriction_formula = $request->get('restriction_formula');
        $data->faskes_tk1 = !empty($request->get('faskes_tk1'))  ? 1 : 0;
        $data->faskes_tk2 = !empty($request->get('faskes_tk2'))  ? 1 : 0;
        $data->faskes_tk3 = !empty($request->get('faskes_tk3'))  ? 1 : 0;
        // dd($request->get('category'));
        $category = Category::find($request->get('category'));
        $category->products()->save($data);
        return redirect()->route('products.index')->with('status', 'Success Add Product' . $request->get('name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        return view('product.edit', ['product' => Product::find($product), 'category' => Category::All()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        $product = Product::find($product);
        // dd($product);
        $product->generic_name = $request->get('generic_name');
        $product->description = $request->get('description');
        $product->form = $request->get('form');
        $product->restriction_formula = $request->get('restriction_formula');
        $product->faskes_tk1 = !empty($request->get('faskes_tk1'))  ? 1 : 0;
        $product->faskes_tk2 = !empty($request->get('faskes_tk2'))  ? 1 : 0;
        $product->faskes_tk3 = !empty($request->get('faskes_tk3'))  ? 1 : 0;
        dd($request->get('category'));
        $category_new = Category::find($request->get('category'));
        $category_new->products()->save($product);
        return redirect()->route('products.index')->with('status', 'Success Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = Product::find($id);
            $product->delete();
            return redirect()->route('products.index')->with('status', 'Success delete product with soft del');
        } catch (\Throwable $th) {
            $msg = "Failed to delete product";
            return redirect()->route('products.index')->with('status', 'Error ' . $msg);
        }
    }

    public function showInfo()
    {
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
            Did you know? <br>This message is sent by a Control ler.'</div>"
        ), 200);
    }
    public function getEditForm(Request $request)
    {
        $id = $request->get('id');
        $data = Product::find($id);
        $category = Category::all();
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('product.getEditForm', compact('data', 'category'))->render()
        ), 200);
    }
    public function getEditForm2(Request $request)
    {
        $id = $request->get('id');
        $data = Product::find($id);
        $category = Category::all();
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('product.getEditForm2', compact('data', 'category'))->render()
        ), 200);
    }
    public function saveData(Request $request)
    {

        $id = $request->get('id');
        $Product = Product::find($id);
        $Category = Category::find($request->get('category'));
        $Product->generic_name = $request->get('generic_name');
        $Product->description = $request->get('description');
        $Product->form = $request->get('form');
        $Product->restriction_formula = $request->get('restriction_formula');
        $Product->faskes_tk1 = $request->get('faskes_tk1') ? 1 : 0;
        $Product->faskes_tk2 = $request->get('faskes_tk2') ? 1 : 0;
        $Product->faskes_tk3 = $request->get('faskes_tk3') ? 1 : 0;
        $Product->save();
        return response()->json(
            array(
                'status' => 'ok',
                'msg' => 'product data updated'
            ),
            200
        );
    }
    public function deleteData(Request $request)
    {
        try {
            $id = $request->get('id');
            $Product = Product::find($id);
            $Product->delete();
            return response()->json(array(
                'status' => 'ok',
                'msg' => 'product data deleted'
            ), 200);
        } catch (\PDOException $e) {
            return response()->json(array(
                'status ' => ' error',
                'msg' => 'product is not deleted'
            ), 200);
        }
    }
}
