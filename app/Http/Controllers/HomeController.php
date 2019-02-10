<?php

namespace App\Http\Controllers;

use App\Item;
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

        $item = Item::where('menu_name', $itemName)->get();
        if(count($item) > 0)
            $item = $item[0];
        return view('home', compact('itemName', 'item'));
    }
}
