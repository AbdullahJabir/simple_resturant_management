<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Item;
use App\Category;
use App\Sliderr;
use App\Reservation;

class DashboardController extends Controller
{
    public function index()
    {
    	$categoryCount=Category::count();
    	$itemCount=Item::count();
    	$sliderCount=Sliderr::count();
    	$reservations=Reservation::where('status',false)->get();
    	$contactCount=Contact::count();
    	
       return view('admin.dashboard',compact('categoryCount','itemCount','sliderCount','reservations','contactCount'));
}
}