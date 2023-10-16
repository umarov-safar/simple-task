<?php

namespace App\Http\Controllers;

use App\Http\Actions\Dealer\CreateDealerAction;
use App\Http\Requests\StoreDealerRequest;
use App\Http\Requests\UpdateDealerRequest;
use App\Http\Resources\DealerResource;
use App\Models\Dealer;
use App\Http\Resources\EmptyResource;

class DealerController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DealerResource::collection(Dealer::simplePaginate(20));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDealerRequest $request, CreateDealerAction $action)
    {
        return new DealerResource($action->execute($request->validated()));
    }

   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dealer $dealer)
    {
        $dealer->delete();
        return new EmptyResource();
    }
}
