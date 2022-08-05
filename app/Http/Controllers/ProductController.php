<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = ProductCategory::findOrFail(1);

        $products = DB::table('products')
        ->join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
        ->select('products.*','product_categories.*')
      //  ->where('product_categories.category_name', $category)
        ->paginate(7);
        
      //  dd($products);
        //$products = Product::paginate(7);
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_types = ProductCategory::get();
      // dd($category_types);
      //  return view('products.create')->with('category_types', $category_types);
      return view('products.create', compact('category_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:15',
            'product_brand' => 'required|max:15',
            'quantity' => 'required|max:8',
            'price' => 'required|max:8',
            'weight' => 'required|max:8',
            'product_category_id' => 'required|max:8',
        ]);

        Product::create([
            'product_name' => $request->product_name,
            'product_brand' => $request->product_brand,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'weight' => $request->weight,
            'product_category_id' => $request->product_category_id,

        ]);
        return to_route('products.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->firstOrFail();

        $categorydata = ProductCategory::where('id', $product->product_category_id)->firstOrFail();

        $category_types = ProductCategory::get();
        // dd($category_types);
        //  return view('products.create')->with('category_types', $category_types);
       
       
        //$product = Product::where('id', $id)->firstOrFail();
        return view('products.edit', compact('category_types'))->with('categorydata', $categorydata)->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
