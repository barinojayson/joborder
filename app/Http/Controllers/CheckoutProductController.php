<?php
namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use app\Models\Customer;
use app\Models\Order;
use app\Models\Order_Detail;
use app\Models\Order_Freebie;
use app\Services\ProductCheckoutBuilder;

class CheckoutProductController extends Controller {
	
	/**
	 * Retrieves the list of customers
	 * 
	 * @param $request Request
	 *
	*/
    public function addToCart(Request $request)
    {
/* 		$this->validate($request, [
            'cart' => ''
        ]); */
		
		$builder = new ProductCheckoutBuilder();
		
		$order = new Order();
		$order->customer_id = $request->customer_id;
		$builder->setOrder($order);
		
		collect($request->cart)->map(function($order) use ($builder) {
			$order_detail = new Order_Detail();
			$order_detail->product_id = $order['product_id'];
			$order_detail->quantity = $order['quantity'];
			$builder->add($order_detail);
		});
		
		$builder->total();
    }
}