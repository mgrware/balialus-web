<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller {

	public function index(){
		$customers=Customer::all();
		return view('customer', ['customers' => $customers]);
	}

}
