<?php

use Illuminate\Database\Seeder;
use app\Models\Product;
use app\Models\Deal;
use app\Models\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->call('JobCornerSeeder');
        $this->command->info('JobCorner app seeds finished.');
    }
}

class JobCornerSeeder extends Seeder {

    public function run() {

        // clear database
        DB::table('customer_offers')->delete();
        DB::table('customers')->delete();
        DB::table('deal_criteria')->delete();
        DB::table('deal_offer')->delete();
        DB::table('deals')->delete();
        DB::table('products')->delete();

		// seed products
        $classic = Product::create(array(
            'name'         => 'classic',
            'description'  => 'basic level of advertisement',
            'allowed_char' => 765,
            'sell_display' => 1,
            'price' => 269.99,
        ));

        $standout = Product::create(array(
            'name'         => 'standout',
            'description'  => 'use company logo and longer presentation text',
            'allowed_char' => 1275,
            'sell_display' => 1,
            'price' => 322.99,
        ));

        $premium = Product::create(array(
            'name'         => 'premium',
            'description'  => 'standout + and displays at the top',
            'allowed_char' => 1275,
            'sell_display' => 1,
            'price' => 394.99,
        ));

        $this->command->info('Created products data');
		
		// seed customers
		$apple = Customer::create(array(
			'name' => 'Apple',
			'contact_number' => 1234,
        ));		
		
		$microsoft = Customer::create(array(
			'name' => 'Microsoft',
			'contact_number' => 5678,
        ));
		
		$samsung = Customer::create(array(
			'name' => 'Samsung',
			'contact_number' => 7654,
        ));
		
		// seed deals
		$deal1 = Deal::create(array(
			'name' => '50% off',
        ));
		
		$deal2 = Deal::create(array(
			'name' => 'buy 1 take 1',
        ));

		//reference for linking tables
        /* // seed our fish table ------------------------
        // our fish wont have names... because theyre going to be eaten

        // we will use the variables we used to create the bears to get their id

        Fish::create(array(
            'weight'  => 5,
            'bear_id' => $bearLawly->id
        ));
        Fish::create(array(
            'weight'  => 12,
            'bear_id' => $bearCerms->id
        ));
        Fish::create(array(
            'weight'  => 4,
            'bear_id' => $bearAdobot->id
        ));

        $this->command->info('They are eating fish!');

        // seed our trees table ---------------------
        Tree::create(array(
            'type'    => 'Redwood',
            'age'     => 500,
            'bear_id' => $bearLawly->id
        ));
        Tree::create(array(
            'type'    => 'Oak',
            'age'     => 400,
            'bear_id' => $bearLawly->id
        ));

        $this->command->info('Climb bears! Be free!');

        // seed our picnics table ---------------------

        // we will create one picnic and apply all bears to this one picnic
        $picnicYellowstone = Picnic::create(array(
            'name'        => 'Yellowstone',
            'taste_level' => 6
        ));
        $picnicGrandCanyon = Picnic::create(array(
            'name'        => 'Grand Canyon',
            'taste_level' => 5
        ));

        // link our bears to picnics ---------------------
        // for our purposes we'll just add all bears to both picnics for our many to many relationship
        $bearLawly->picnics()->attach($picnicYellowstone->id);
        $bearLawly->picnics()->attach($picnicGrandCanyon->id);

        $bearCerms->picnics()->attach($picnicYellowstone->id);
        $bearCerms->picnics()->attach($picnicGrandCanyon->id);

        $bearAdobot->picnics()->attach($picnicYellowstone->id);
        $bearAdobot->picnics()->attach($picnicGrandCanyon->id);

        $this->command->info('They are terrorizing picnics!'); */

    }

}
