<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
    public function index()
    {
    	$contacts=Contact::all();

    	return view('admin.contact.index',compact('contacts'));
    }
    public function show($id)
    {
    	$contact=Contact::find($id);
    	return view('admin.contact.show',compact('contact'));
    }
    public function destroy($id)
    {
    	Contact::find($id)->delete();
    	 Toastr::success('Contact Successfuly Delete','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
