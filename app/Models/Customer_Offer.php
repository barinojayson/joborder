<?php

namespace App\Models;

use Eloquent;

class Customer_Offer extends Eloquent
{
    protected $table = 'customer_offers';

    public $timestamps = false;

    protected $softDelete = false;
}
