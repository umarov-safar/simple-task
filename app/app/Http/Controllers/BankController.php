<?php

namespace App\Http\Controllers;

use App\Http\Actions\Bank\CreateBankAction;
use App\Http\Requests\StoreBankRequest;
use App\Http\Requests\UpdateBankRequest;
use App\Http\Resources\BankResource;
use App\Models\Bank;
use App\Http\Resources\EmptyResource;

class BankController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return BankResource::collection(Bank::simplePaginate(20));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBankRequest $request, CreateBankAction $action): BankResource
    {
        return new BankResource($action->execute($request->validated()));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank)
    {
        $bank->delete();
        return new EmptyResource();
    }
}
