<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpensesRequest;
use App\Http\Resources\ExpensesResource;
use App\Models\Expense;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ExpensesResource::collection(
            Expense:: all()
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
    public function store(StoreExpensesRequest $request, Expense $expense)
    {
        $request->validated($request->all());
        // $expenses->
        $expense->product = $request->product;
        $expense->amount = $request->amount;
        $expense->price = $request->price;
        $expense->user = $request->user;
        $expense->save();

        return $this->success('','Successfully Saved',200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        return new ExpensesResource($expense);
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
    public function update(Request $request, Expense $expense)
    {
        $expense->product = $request->product;
        $expense->amount = $request->amount;
        $expense->price = $request->price;
        $expense->user = $request->user;
        $expense->update();

        return $this->success('','Successfully Updated',200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();

        return $this->success('','Successfully Deleted',200);
    }
}
