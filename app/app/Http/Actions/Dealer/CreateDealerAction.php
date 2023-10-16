<?php

namespace App\Http\Actions\Dealer;

use App\Models\Dealer;

class CreateDealerAction 
{

    public function execute(array $data): Dealer
    {
        return Dealer::create($data);
    }

}