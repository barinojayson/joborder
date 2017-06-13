<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order_Detail extends Eloquent
{
    protected $table = 'order_details';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
