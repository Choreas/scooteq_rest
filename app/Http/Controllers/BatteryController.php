<?php

namespace App\Http\Controllers;

use App\Battery;
use Illuminate\Http\Request;

class BatteryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Battery::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $battery = Battery::create($this->validateData());
        return ($battery);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Battery $battery)
    {
        return $battery;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Battery $battery)
    {
        Battery::findOrFail($battery['id'])->fill($this->validateDataUpdate())->save();
        $new = Battery::findOrFail($battery['id']);
        return ($new);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Battery $battery)
    {
        $battery->delete();
        return "Record deleted.";
    }

    private function validateData(Battery $battery=NULL)
    {
        return request()->validate([
            'description' => 'required',
        ]);
    }

    private function validateDataUpdate(Battery $battery=NULL)
    {
        return request()->validate([
            'description' => 'required',
        ]);
    }
}
