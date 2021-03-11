<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * verzamelt evt benodigde gegevens
         * voert evt backend opdracht (validaties)
         * doet evt iets in database
         * return view
         */
        $customers = Customer::paginate(15);
        return view('customer.index', [
            'customers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'contact_name'          => 'required',
            'company_name'          => 'required',
            'company_position'      => ['required', 'different:company_name'],
            'email'                 => 'required',
            'phone'                 => 'required'
        ]);

        $customer = Customer::create([
            'profile_picture'       => $request->profile_picture,
            'contact_name'          => $request->contact_name,
            'company_name'          => $request->company_name,
            'company_position'      => $request->company_position,
            'email'                 => $request->email,
            'phone'                 => $request->phone
        ]);

        return redirect()->route('customers.show', $customer->id);
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
        $customer = Customer::findOrFail($id);
        return view('customer.show', [
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::FindOrFail($id); //sql:select * FROM customers wehre 'id' =$id

        return view('customer.edit', [
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
        $customer = Customer::FindOrFail($id);

        $request->validate([
            'contact_name'          => 'required',
            'company_name'          => 'required',
            'company_position'      => ['required', 'different:company_name'],
            'email'                 => 'required',
            'phone'                 => 'required'
        ]);

        $customer->update([
            'profile_picture'       => $request->profile_picture,
            'contact_name'          => $request->contact_name,
            'company_name'          => $request->company_name,
            'company_position'      => $request->company_position,
            'email'                 => $request->email,
            'phone'                 => $request->phone
        ]);

        return redirect()
            ->route('customers.show' , $id)
            ->with('update', 'Customer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect()
            ->route('customers.index')
            ->with('status', 'Card deleted succesfully!');
    }
}
