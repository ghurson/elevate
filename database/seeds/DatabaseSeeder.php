<?php

use Illuminate\Database\Seeder;
use App\Car;
use App\Driver;
use App\Ticket;
use App\User;
use App\Order;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CarTableSeeder::class);
        $this->call(DriverTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(TicketTableSeeder::class);
    }
}
