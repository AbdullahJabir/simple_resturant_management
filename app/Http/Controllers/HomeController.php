<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Sliderr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Sliderr::all();
        $categories = Category::all();
        $items = Item::all();
       return view('welcome',compact('sliders','categories','items'));
   
    }
}
