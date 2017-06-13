<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Deal_Offer extends Eloquent
{
    protected $table = 'deal_offer';

    public $timestamps = false;

    protected $softDelete = false;
}
