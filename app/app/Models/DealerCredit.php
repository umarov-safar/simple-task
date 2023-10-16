<?php

namespace App\Models;

use App\Models\Enums\DealerCreditStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealerCredit extends Model
{
    use HasFactory;

    const FILLABLE = [
        'dealer_id', 
        'bank_id', 
        'dealer_employee',
        'credit_amount', 
        'credit_term', 
        'interest_rate',
        'reason_description',
        'status'
    ];

    protected $fillable = self::FILLABLE;

    protected $casts = [
        'status' => DealerCreditStatusEnum::class
    ];


    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }


    public static function withIncludes()
    {
        $includes = request()->query('include');
        
        if ($includes) {
            $arr = explode(',', $includes);
            return static::query()->with($arr);
        }
        
        return new static();
    }
}
