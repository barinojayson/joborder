<?php

namespace App\Models;

use Eloquent;

class Customer extends Eloquent
{
    protected $table = 'customers';

    public $timestamps = false;

    protected $softDelete = false;
}
