<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;

class CarController extends Controller
{
    static function index(){
        return Car::first()->tickets;
    }

    static function show(Car $car){
        return view('cars.show', compact('car'));
    }

    static function show_tickets(Car $car) {

        return view('cars.tickets', array(
            'car' => $car,
            'tickets' => $car->tickets
        ));
//        return $car->tickets;
    }

}
