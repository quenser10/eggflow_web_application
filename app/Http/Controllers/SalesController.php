<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use App\Http\Resources\SalesResource;
use App\Traits\HttpResponses;

class SalesController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new SalesResource(Sales::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Sales $sales)
    {
        $request->validated($request->all());

        $sales->sold_egg = $request->sold_egg;
        $sales->size = $request->size;
        $sales->customer = $request->customer;
        $sales->seller = $request->seller;
        $sales->save();
        
        return $this->success('','Successfully Saved', $sales);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        return new SalesResource($sales);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sales)
    {
        $sales->sold_egg = $request->sold_egg;
        $sales->size = $request->size;
        $sales->customer = $request->customer;
        $sales->seller = $request->seller;
        $sales->update();
        
        return $this->success($sales,'Successfully Updated', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        $sales->delete();

        return $this->success('','Successfully Deleted', 200);
    }
}
