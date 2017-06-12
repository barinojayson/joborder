<?php

namespace app\Services;

use app\Models\Product;
use app\Models\Order_Detail;
use app\Models\Deal_Criteria;
use app\Models\Order;
use app\Models\Customer;
use app\Models\Deal;

class ProductCheckoutBuilder
{
    protected $order;
    protected $order_details;
    protected $order_freebies;
    
    public function __construct()
    {
        $this->order_details = collect();	
        $this->order_freebies = collect();	
    }
	
	public function add(Order_Detail $order_detail)
	{
		$this->order_details->push($order_detail);		
	}

	public function save()
	{
		$this->order_details->map(function($item) {
			$item->save();
		});
	}
	
	public function getPriceDeals($product_id)
	{
		$this->getCustomerDeals();
	}
	
	public function setFreebie($product_id)
	{
		
	}
	
	public function getCustomerDeals()
	{
		$customer = Customer::select('priviledged')
		    ->whereId($this->order->customer_id)
			->first();
			
		if (!$customer->priviledged) {
			return null;
		}
		
		$relations = [
			'customerOffers',
			'customerOffers.deal',
			'customerOffers.deal.criteria',
			'customerOffers.deal.offer',
		];
		
		$customer_offers = customer::with($relations)
		->whereId($this->order->customer_id)
		->first();
		
		return $customer_offers->customerOffers;
		
	}
	
	public function setOrder(Order $order)
	{
		$this->order = $order;
	}
	
	public function total()
	{
		//save order to get id
		$this->order->save();
		
		$this->order_details->map(function($product) {
			$order_detail = new Order_Detail();
			$order_detail->order_id = $this->order->id;
			$order_detail->product_id = $product->product_id;
			$order_detail->quantity = $product->quantity;
			$order_detail->price = $this->getPriceDeals($product->product_id);
			$order_detail->discount = 0; //create function to get the discount
			$order_detail->save();
			
			//create data for freebie also
		});
		
		dd($this->order_details);
	
	}
	
	
	
}
