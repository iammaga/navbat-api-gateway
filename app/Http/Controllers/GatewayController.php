<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GatewayController extends Controller
{
    public function getBookings()
    {
        return Http::get('http://127.0.0.1:8083/api/bookings')->body();
    }

    public function getPayments()
    {
        return Http::get('http://127.0.0.1:8082/api/payments')->body();
    }
}
