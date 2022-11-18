<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SampleTable;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SampleTable::all());
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
        $sample_data = [
            "name" => $request->name,
            "age" => $request->age,
            "address" => $request->address
        ];

        $new_sample = SampleTable::create($sample_data);

        return response()->json([
            "message" => "success",
            "data" => $new_sample
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(SampleTable::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        $updated = SampleTable::findOrFail($id);
        $updated->name = $request->name;
        $updated->age = $request->age;
        $updated->address = $request->address;
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
    public function destroy($id)
    {
        $deleted = SampleTable::findOrFail($id);
        $deleted->delete();

        return response()->json([
            "message" => "success",
            "data" => $deleted
        ]);
    }
}
