<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;

class CarController extends Controller
{
    static function index()
    {
        $cars = Car::get();
        return view('cars.show', [
            'cars' => $cars
        ]);

    }

    static function show(Car $car)
    {
        return view('cars.single', [
            'car' => $car
        ]);
    }

    static function show_all_cars(Car $car)
    {

        return view('cars.tickets', array(
            'car' => $car,
            'tickets' => $car->tickets
        ));
//        return $car->tickets;
    }

}
