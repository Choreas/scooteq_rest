<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Resources\Customer as CustomerResource;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Customer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = Customer::create($this->validateData());
        return ($customer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return $customer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        Customer::findOrFail($customer['id'])->fill($this->validateDataUpdate())->save();
        $new = Customer::findOrFail($customer['id']);
        return ($new);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return "Record deleted.";
    }

    private function validateData(Customer $customer=NULL)
    {
        return request()->validate([
            'CountryCode' => 'required',
            'Name' => 'required',
            'FirstName' => 'required',
            'PostalCode' => 'required',
            'City' => 'required',
            'Address' => 'required',
        ]);
    }

    private function validateDataUpdate(Customer $customer=NULL)
    {
        return request()->validate([
            'CountryCode' => 'nullable',
            'Name' => 'nullable',
            'FirstName' => 'nullable',
            'PostalCode' => 'nullable',
            'City' => 'nullable',
            'Address' => 'nullable',
        ]);
    }
}
