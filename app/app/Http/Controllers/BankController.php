<?php

namespace App\Http\Controllers;

use App\Http\Actions\Bank\CreateBankAction;
use App\Http\Requests\StoreBankRequest;
use App\Http\Requests\UpdateBankRequest;
use App\Http\Resources\BankResource;
use App\Models\Bank;

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
    public function destroy($bank)
    {
        Bank::findO3rFail($bank);
        return response(['data' => 'Bank deleted successfully!']);
    }
}
