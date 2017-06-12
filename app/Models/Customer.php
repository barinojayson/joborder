<?php

namespace app\Models;

use Eloquent;
use app\Models\Customer_Offer;

class Customer extends Eloquent
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $timestamps = true;
	
	public function offer()
    {
        return $this->hasMany(Customer_Offer::class, 'customer_id', 'id');
    }
}
