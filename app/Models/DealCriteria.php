<?php

namespace App\Models;

use Eloquent;

class DealCriteria extends Eloquent
{
    protected $table = 'deal_criteria';

    public $timestamps = false;

    protected $softDelete = false;
}
