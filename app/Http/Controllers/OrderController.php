<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Input;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests;
use App\User;
use App\Order;

class OrderController extends Controller
{
    //
    static function index(){


        return view('order.create', [
            'user' => User::find(1),
            'orders' => Order::all()
        ]);
    }

    static function create(Request $request){

        Order::create([
            'title' => $request->get('title'),
            'pickup' => $request->get('pickup'),
            'user_id' => $request->get('user_id')
        ]);

        return redirect()->action('OrderController@index');
    }

    static function show(order $order) {

        return view('order.show', [
            'order' => $order,
            'user' => $order->user
        ]);

    }

    static function update(Request $request, Order $order){
        $order->update($request->all());
        return redirect()->action('OrderController@index');
    }

    static function delete(){}

}
