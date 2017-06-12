<?php

namespace app\Models;

use Eloquent;
use app\Models\Deal_Criteria;
use app\Models\Deal_Offer;
use app\Models\Customer_Offer;

class Deal extends Eloquent
{
    protected $table = 'deals';
	protected $primaryKey = 'id';
	
	public function criteria()
    {
        return $this->hasMany(Deal_Criteria::class, 'deal_id', 'id');
    }
	
	public function offer()
    {
        return $this->hasMany(Deal_Offer::class, 'deal_id', 'id');
    }
	
	public function customers()
    {
        return $this->hasMany(Customer_Offer::class, 'deal_id', 'id');
    }
}
