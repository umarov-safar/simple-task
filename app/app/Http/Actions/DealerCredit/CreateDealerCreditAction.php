<?php

namespace App\Http\Actions\DealerCredit;

use App\Models\DealerCredit;
use Illuminate\Support\Arr;

class CreateDealerCreditAction 
{

    public function execute(array $data): DealerCredit
    {
        return DealerCredit::create(Arr::only($data, DealerCredit::FILLABLE));
    }

}