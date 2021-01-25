<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerGI;
use App\Models\CustomerCI;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = CustomerGI::with('customer_contact_information')->get();
        
        return view('pages.index', [
            'customers' => $customers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CustomerGI::create([
            'personal_id' => $request->personal_id,
            'name' => $request->name,
        ]);

        CustomerCI::create([
            'personal_id' => $request->personal_id,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return [
            'success' => true,
            'message' => 'Customer Succesfully added'
          ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = CustomerGI::with('customer_contact_information')->where('personal_id', $id)->first();
        return view('pages.form', [
            'customer' => $customer,
        ]);
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
        $customerGI = CustomerGI::where('personal_id', $id)->first();
        $customerCI = CustomerCI::where('personal_id', $id)->first();
        $customerGI->update([
            'personal_id' => $request->personal_id,
            'name' => $request->name,
        ]);
        $customerCI->update([
            'personal_id' => $request->personal_id,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return [
            'success' => true,
            'message' => 'Customer Information Succesfully changed'
          ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CustomerCI::where('personal_id', $id)->delete();
        CustomerGI::where('personal_id', $id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Customer Succesfully deleted'
          ]);
    }
}
