<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payments;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Payments::latest()->paginate(3);
      return view ('payments', compact ('data'))
      ->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('payments.create');
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
      'PrevWaterBill' => 'required',
      'CurrWaterBill' => 'required',
      'TotalWaterCons' => 'required',
      'Garbage' => 'required',
      'TotalPayable' => 'required',
      'PaymentCode' => 'required'

    ]);
      $input_data = array(
      'HouseNo' => $request->HouseNo,
      'TenantName' => $request->TenantName,
      'PrevWaterBill' => $request->PrevWaterBill,
      'CurrWaterBill' => $request->CurrWaterBill,
      'TotalWaterCons' => $request->TotalWaterCons,
      'Garbage' => $request->Garbage,
      'TotalPayable' => $request->TotalPayable,
      'PaymentCode' => $request->PaymentCode
     );

     Payments::create($input_data);


     return redirect('payments')
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
      $data = Payments::findOrFail($id);
      return view('payments', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = Payments::findOrFail($id);
      return view('payments.edit', compact('data'));
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
      $request->validate( [
      'HouseNo' => 'required',
      'TenantName' => 'required',
      'PrevWaterBill' => 'required',
      'CurrWaterBill' => 'required',
      'TotalWaterCons' => 'required',
      'Garbage' => 'required',
      'TotalPayable' => 'required',
      'PaymentCode' => 'required'

    ]);
      $input_data = array(
      'HouseNo' => $request->HouseNo,
      'TenantName' => $request->TenantName,
      'PrevWaterBill' => $request->PrevWaterBill,
      'CurrWaterBill' => $request->CurrWaterBill,
      'TotalWaterCons' => $request->TotalWaterCons,
      'Garbage' => $request->Garbage,
      'TotalPayable' => $request->TotalPayable,
      'PaymentCode' => $request->PaymentCode
     );

     Payments::whereId($id)->update($input_data);


     return redirect('payments')
    ->with ('success', 'Category added successfully');
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
