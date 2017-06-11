<?php

namespace App\Models;

use Eloquent;

class CustomerOffer extends Eloquent
{
    protected $table = 'customer_offers';

    public $timestamps = false;

    protected $softDelete = false;
}
