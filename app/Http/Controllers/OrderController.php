<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class OrderController extends Controller
{
    //
    static function index(){
        return view('order.create', [
            'user' => User::find(1)
        ]);
    }
}
