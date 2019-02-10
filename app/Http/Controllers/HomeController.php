<?php

namespace App\Http\Controllers;

use App\MenuItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $itemName = null;

        return view('home', compact('itemName'));
    }

    public function getDetails($itemName) {
        return view('home', compact('itemName'));
    }
}
