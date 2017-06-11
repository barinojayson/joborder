<?php

namespace app\Models;

use Eloquent;

class Product extends Eloquent
{
    protected $table = 'products';

    public $timestamps = false;

    protected $softDelete = false;
}
