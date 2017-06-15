<?php

namespace Tests\Feature;

use Tests\TestCase;
use app\Models\Customer;

class CustomerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetCustomer()
    {
        $customer = Customer::all()->random();
		$this->assertNotNull($customer);
    }
}
