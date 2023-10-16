<?php

namespace App\Http\Actions\Bank;

use App\Models\Bank;

class CreateBankAction 
{

    public function execute(array $data)
    {
        return Bank::create($data);
    }

}