<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tenants1;

class Tenants1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      {
        $data = Tenants1::latest()->paginate(3);
        return view ('tenants1', compact ('data'))
        ->with('i', (request()->input('page', 1) -1) *5);
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tenants1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate( [
      'HouseNo' => 'required',
      'TenantName' => 'required',
      'MonthlyRate' => 'required',
      'OutstandingBalance' => 'required',
      'LastPayment' => 'required'

    ]);
      $input_data = array(
      'HouseNo' => $request->HouseNo,
      'TenantName' => $request->TenantName,
      'MonthlyRate' => $request->MonthlyRate,
      'OutstandingBalance' => $request->OutstandingBalance,
      'LastPayment' => $request->LastPayment
     );

     Tenants1::create($input_data);


     return redirect('tenants1')
    ->with ('success', 'Category added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = Tenants1::findOrFail($id);
      return view('show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Tenants1::findOrFail($id);
      $data->delete();

      return redirect('tenants1')->with('error', 'Employee Deleted Successfully ');
    }
}
