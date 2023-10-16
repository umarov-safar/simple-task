<?php

namespace App\Models\Enums;

enum DealerCreditStatusEnum: int
{
    case NEW = 1;
    case IN_PROGRESS = 2;
    case APPROVED = 3;
    case REJECTED = 4;
}