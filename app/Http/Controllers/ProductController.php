<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // GET - all /larave.com/get_products
    {
        return response()->json(Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // create ui
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // create product
    {
        // $new = Product();
        // $new->name = $request->name;
        // $new->description = $request->description;
        // $new->price = $request->price;
        // $new->save();

        $product_data = [
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price
        ];

        $new_product = Product::create($product_data);

        return response()->json([
            "message" => "success",
            "data" => $new_product
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) // get specific /larave.com/get_products/1
    {
        return response()->json(Product::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // edit ui
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // update specific /larave.com/get_products/1
    {
        $updated = Product::findOrFail($id);
        $updated->name = $request->name;
        $updated->description = $request->description;
        $updated->price = $request->price;
        $updated->save();

        return response()->json([
            "message" => "success",
            "data" => $updated
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // delete specific /larave.com/get_products/1
    {
        $deleted = Product::findOrFail($id);

        $deleted->forceDelete();

        // if softDeletes is enabled
        // delete() = archieve
        // forceDelete() = delete in db hello

        // else
        // both will work

        return response()->json([
            "message" => "success",
            "data" => $deleted
        ]);
    }
}
