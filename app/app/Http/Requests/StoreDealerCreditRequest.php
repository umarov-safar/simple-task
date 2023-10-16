<?php

namespace App\Http\Requests;

use App\Models\Enums\DealerCreditStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDealerCreditRequest extends FormRequest
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
            'dealer_id' => ['required', 'integer', Rule::exists('dealers', 'id')], 
            'bank_id' => ['required', 'integer', Rule::exists('banks', 'id')], 
            'dealer_employee' => ['required', 'string', 'max:255'],
            'credit_amount' => ['required', 'numeric'], 
            'credit_term' => ['required', 'date_format:Y-m-d H:i:s'], 
            'interest_rate' => ['nullable', 'numeric'],
            'reason_description' => ['nullable', 'string'],
            'status' => ['required', 'integer', Rule::enum(DealerCreditStatusEnum::class)]
        ];
    }
}
