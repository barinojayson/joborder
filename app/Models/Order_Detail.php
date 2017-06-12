<?php

namespace app\Models;

use Eloquent;

class Order_Detail extends Eloquent
{
    protected $table = 'order_details';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
