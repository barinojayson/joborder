<?php

namespace App\Models;

use Eloquent;

class DealOffer extends Eloquent
{
    protected $table = 'deal_offer';

    public $timestamps = false;

    protected $softDelete = false;
}
