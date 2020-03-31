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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Battery $battery)
    {
        //
    }
}
