<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use app\Models\Customer_Offer;

class Customer extends Eloquent
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $timestamps = true;
	
	public function customerOffers()
    {
        return $this->hasMany(Customer_Offer::class, 'customer_id', 'id');
    }
}
