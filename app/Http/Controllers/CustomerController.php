<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{

	public function index(){
		$customers=Customer::all();
		return view('customer', ['customers' => $customers]);
	}

	public function newCustomer(Request $request){
		if($request->ajax()){
			$customer=Customer::create($request->all());
			return response()->json($customer);
		}
	}
}