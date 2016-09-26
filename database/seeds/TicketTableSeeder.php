<?php

use Illuminate\Database\Seeder;
use App\Ticket;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
    }
}
