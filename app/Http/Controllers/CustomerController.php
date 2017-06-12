<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use app\Http\Controllers\Controller;
use app\Models\Customer;

class CustomerController extends Controller {
	
	/**
	 * Retrieves the list of customers
	 * 
	 * @param $request Request
	 *
	*/
    public function index(Request $request)
    {
		$relation = [];
		if ($request->has('include')) {
			$relation[] = 'offer'; //returns the list of offers for customer
		}
        $customers = Customer::with($relation)->get();
        return $customers; // pass this to view
    }
    
	/**
	 * Retrieves the list of customers
	 *
	 * @param $request Request
	 * @param $id int
	*/
    public function show(Request $request, int $id)
    {
		$relation = [];
		if ($request->has('include')) {
			$relation[] = 'offer'; //returns the list of offers for customer
		}
        $customer = Customer::with($relation)->find($id);
        return $customer; //pass to view
    }
    
	/**
	 * Retrieves the list of customers
	 *
	 * @param $request Request
	 *
	*/
    public function save(Request $request)
    {
        /* $this->validate($request, [
        'name' => 'required|string',
        'contact_no' => 'required|integer',
        ]); */
    
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->contact_number = $request->contact_no;
        $customer->save();
    
        return $customer;
    }
    
	/**
	 * Retrieves the list of customers
	 *
	 * @param $request Request
	 * @param $id int
	*/
    public function update(Request $request, $id)
    {
        /* $this->validate($request, [
        'name' => 'required|string',
        'contact_no' => 'required|integer',
        ]); */
        
        $customer = new Customer();
        $customer->exists = true;
        $customer->id = $id;
        $customer->name = $request->name;
        $customer->contact_number = $request->contact_no;
        $customer->save();
        
        return $customer;
    }
    
	/**
	 * Retrieves the list of customers
	 *
	 * @param $request Request
	 * @param $id int
	 *
	 * @return void
	*/
	public function delete(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->destroy($id);
    }
}