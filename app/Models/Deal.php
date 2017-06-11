<?php

namespace App\Models;

use Eloquent;

class Deal extends Eloquent
{
    protected $table = 'deal';

    public $timestamps = false;

    protected $softDelete = false;
}
