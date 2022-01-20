<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payments1;

class Payments1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Payments1::latest()->paginate(3);
      return view ('payments1', compact ('data'))
      ->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('payments1.create');
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
          'PaymentId'=> 'required',
          'Date'=> 'required',
          'TenantName'=> 'required',
          'Amount'=> 'required',
          'Status'=>'required'
        ]);
          $input_data = array(
            'PaymentId' => $request->PaymentId,
            'Date' => $request->Date,
            'TenantName' =>$request->TenantName,
            'Amount'=>$request->Amount,
            'Status'=>$request->Status
      );

           Payments1::create($input_data);


           return redirect('payments1')
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
      $data = Payments1::findOrFail($id);
      return view('payments1', compact('data'));
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
        //
    }
}
