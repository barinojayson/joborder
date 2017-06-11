<?php

namespace App\Models;

use Eloquent;

class Deal_Criteria extends Eloquent
{
    protected $table = 'deal_criteria';

    public $timestamps = false;

    protected $softDelete = false;
}
