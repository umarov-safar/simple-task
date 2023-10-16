<?php

namespace App\Http\Resources;

use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DealerCreditResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'dealer_id' => $this->dealer_id, 
            'bank_id' => $this->bank_id, 
            'dealer_employee' => $this->dealer_employee,
            'credit_amount' => $this->credit_amount, 
            'credit_term' => $this->credit_term, 
            'interest_rate' => $this->interest_rate,
            'reason_description' => $this->reason_description,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            
            'dealer' => new DealerResource($this->whenLoaded('dealer')),
            'bank' => new BankResource($this->whenLoaded('bank')),
        ];
    }
}
