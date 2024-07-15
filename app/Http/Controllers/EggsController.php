<?php

namespace App\Http\Controllers;

use App\Models\Egg;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Requests\StoreEggsRequest;
use App\Http\Resources\EggsResource;

class EggsController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EggsResource::collection(
            Egg:: all()
        );
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
    public function store(StoreEggsRequest $request, Egg $egg)
    {
        $request->validated($request->all());

        $egg->quantity = $request->quantity;
        $egg->size = $request->size;
        $egg->user = $request->user;
        $egg->save();

        return $this->success($egg, 'Successfully Saved', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Egg $egg)
    {
        return new EggsResource($egg);
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
    public function update(Request $request, Egg $egg)
    {
        $egg->quantity = $request->quantity;
        $egg->size = $request->size;
        $egg->user = $request->user;
        $egg->save();

        return $this->success($egg, 'Successfully Updated', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Egg $egg)
    {
        $egg->delete();

        return $this->success($egg, 'Successfully Deleted', 200);
    }
}
