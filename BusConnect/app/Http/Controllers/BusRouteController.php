<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusRouteController extends Controller
{
    public function index()
    {
        return view('user/pages/Bus-routes');
    }
}
