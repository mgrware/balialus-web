<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Students;

use Illuminate\Http\Request;

class StudentController extends Controller {

	public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'address' => 'required'
        ]);

        Students::create([
            'name'      => $request->input('name'),
            'address'   => $request->input('address')
        ]);

        return redirect()
            ->route('student')
            ->with('info', 'Data berhasil disimpan');
    }

}
