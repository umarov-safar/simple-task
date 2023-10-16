<?php

namespace App\Http\Controllers;

use App\Http\Actions\Dealer\CreateDealerAction;
use App\Http\Actions\DealerCredit\CreateDealerCreditAction;
use App\Http\Actions\DealerCredit\UpdateDealerCreditAction;
use App\Http\Requests\StoreDealerCreditRequest;
use App\Http\Requests\UpdateDealerCreditRequest;
use App\Http\Resources\DealerCreditResource;
use App\Http\Resources\EmptyResource;
use App\Models\DealerCredit;

class DealerCreditController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dealerCredits = DealerCredit::withIncludes()->simplePaginate(20);
        return DealerCreditResource::collection($dealerCredits);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDealerCreditRequest $request, CreateDealerCreditAction $action)
    {
        return new DealerCreditResource($action->execute($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dealerCredit = DealerCredit::withIncludes()->findOrFail($id);
        return new DealerCreditResource($dealerCredit);
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateDealerCreditRequest $request, 
        DealerCredit $dealerCredit,
        UpdateDealerCreditAction $action
    )
    {
        return new DealerCreditResource($action->execute($dealerCredit, $request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DealerCredit $dealerCredit)
    {
        $dealerCredit->delete();

        return new EmptyResource();
    }
}
