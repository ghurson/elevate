<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('drivers')->insert([
            'name' => 'Gregg Hurson',
            'car-id' => '1',
            'hire-date' => '10-31-2014',
        ]);


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

    }
}
