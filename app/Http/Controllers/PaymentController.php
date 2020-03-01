<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $travellers = $request->travellers;
        $insurance = $request->insurance;
        $seats = $request->seats;
        $total_price = $request->total_price;

        return view("payment",compact("travellers","insurance","seats","total_price"));
    }
}
