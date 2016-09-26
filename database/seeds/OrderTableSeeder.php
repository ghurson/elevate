<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Order::create([
            'title' => 'Prom Limo',
            'pickup' => '4-20-2016'
        ]);
    }
}
