<?php

namespace App\Models;

use Eloquent;

class Deal_Offer extends Eloquent
{
    protected $table = 'deal_offer';

    public $timestamps = false;

    protected $softDelete = false;
}
