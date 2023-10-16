<?php

namespace App\Http\Requests;

use App\Models\Enums\DealerCreditStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDealerCreditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dealer_id' => ['sometimes', 'integer', Rule::exists('dealers', 'id')], 
            'bank_id' => ['sometimes', 'integer', Rule::exists('banks', 'id')], 
            'dealer_employee' => ['sometimes', 'string', 'max:255'],
            'credit_amount' => ['sometimes', 'numeric'], 
            'credit_term' => ['sometimes', 'date_format:Y-m-d H:i:s'], 
            'interest_rate' => ['sometimes', 'nullable', 'numeric'],
            'reason_description' => ['sometimes', 'nullable', 'string'],
            'status' => ['sometimes', 'required', 'integer', Rule::enum(DealerCreditStatusEnum::class)]
        ];
    }
}
