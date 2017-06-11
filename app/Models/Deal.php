<?php

namespace App\Models;

use Eloquent;

class Deal extends Eloquent
{
    protected $table = 'deals';

    public $timestamps = false;

    protected $softDelete = false;
}
