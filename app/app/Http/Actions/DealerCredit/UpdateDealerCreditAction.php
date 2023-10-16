<?php

namespace App\Http\Actions\DealerCredit;

use App\Models\DealerCredit;
use Illuminate\Support\Arr;

class UpdateDealerCreditAction 
{

    public function execute(DealerCredit $dealerCredit, array $data): DealerCredit
    {   
        $dealerCredit->fill(Arr::only($data, DealerCredit::FILLABLE))->save();
        
        return $dealerCredit;
    }

}