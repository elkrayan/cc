<?php

namespace App\Http\Controllers;

use App\Demand;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DemandController extends Controller
{
    public function index() {

        return view('demands.dashboard');
    }
}
