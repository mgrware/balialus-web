<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Customer;

class CustomerController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
	public function index()
	{
		$customers = Customer::all();
		return view('index', compact('customers'));

		// $customers=Customer::all();
		// return view('index', ['customers' => $customers]);
	}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
	public function create()
	{
		return view('create');
	}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
	public function store(Request $request)
	{
		$customers = new Customer();
		$customers->name = $request->name;
		$customers->phone = $request->phone;
		$customers->address = $request->address;
		$customers->order = $request->order;
		// $customers->spdmtr = $request->spdmtr;
		$customers->save();
		return redirect()->route('home.index');
	}

/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
	public function show($id)
	{
	//
	}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
	public function edit($id)
	{
		$customers = Customer::findOrFail($id);
		return view('edit', compact('customers'));
	}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
	public function update(Request $request, $id)
	{
		$customers = Customer::findOrFail($id);
		$customers->name = $request->name;
		$customers->phone = $request->phone;
		$customers->address = $request->address;
		$customers->order = $request->order;
		$customers->save();
		return redirect()->route('home.index');
	}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
	public function destroy($id)
	{
		$customers = Customer::findOrFail($id);
		$customers->delete();
		return redirect()->route('home.index');
	}
}
