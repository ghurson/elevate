<?php

use Illuminate\Database\Seeder;
use App\Driver;

class DriverTableSeeder extends Seeder
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
    }
}
