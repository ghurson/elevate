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
        Car::create([
            'make' => 'Dodge',
            'model' => 'Intrepid',
            'year' => '2004',
            'miles' => '150000',
            'seating' => '5',
        ]);

        Car::create([
            'make' => 'Bentley',
            'model' => 'Phantom',
            'year' => '2016',
            'miles' => '3500',
            'seating' => '4',
        ]);

        Car::create([
            'make' => 'Stretcher',
            'model' => 'Limonator',
            'year' => '2013',
            'miles' => '75413',
            'seating' => '7',
        ]);

        Driver::create([
            'name' => 'Gregg Hurson',
            'car-id' => '1',
            'hire-date' => '10-31-2014',
        ]);

        Driver::create([
            'name' => 'Samantha Gindes',
            'car-id' => '2',
            'hire-date' => '7-15-2014',
        ]);

        Driver::create([
            'name' => 'Nick Hurson',
            'car-id' => '3',
            'hire-date' => '7-13-2014',
        ]);

        Ticket::create([
            'body' => 'get a better car',
            'car_id' => '1',
        ]);

        Ticket::create([
            'body' => 'stop telling people you\'re driving a bentley',
            'car_id' => '2',
        ]);

        Ticket::create([
            'body' => 'don\'t hit the children',
            'car_id' => '2',
        ]);

        Ticket::create([
            'body' => 'change your oil',
            'car_id' => '3',
        ]);

        Ticket::create([
            'body' => 'fix your bumper',
            'car_id' => '3',
        ]);

        User::create([
            'name' => 'Brendan Kiel',
            'email' => 'ghurson@gmail.com'
        ]);

        Order::create([
            'title' => 'Prom Limo',
            'pickup' => '4-20-2016'
        ]);

    }
}
