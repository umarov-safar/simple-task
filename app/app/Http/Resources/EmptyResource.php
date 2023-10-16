<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin App\Models\Bank
 */
class EmptyResource implements Responsable
{
    
    public function toResponse($request = null)
    {
        return response(['data' => null]);
    }
    
}
