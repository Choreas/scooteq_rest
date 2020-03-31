<?php

namespace App\Http\Controllers;

use App\Scooter;
use Illuminate\Http\Request;
use App\Http\Resources\Scooter as ScooterResource;

class ScooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Scooter::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scooter = Scooter::create($this->validateData());
        return ($scooter);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scooter  $scooter
     * @return \Illuminate\Http\Response
     */
    public function show(Scooter $scooter)
    {
        return $scooter;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scooter  $scooter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scooter $scooter)
    {
        Scooter::findOrFail($scooter['id'])->fill($this->validateDataUpdate())->save();
        $new = Scooter::findOrFail($scooter['id']);
        return ($new);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scooter  $scooter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scooter $scooter)
    {
        $scooter->delete();
        return "Record deleted.";
    }

    private function validateData(Scooter $scooter=NULL)
    {
        return request()->validate([
            'Brand' => 'required',
            'Model' => 'required',
            'BatteryId' => 'required',
            'SeatId' => 'required',
            'SpeedId' => 'required',
            'YearBuilt' => 'required',
        ]);
    }

    private function validateDataUpdate(Scooter $scooter=NULL)
    {
        return request()->validate([
            'Brand' => 'nullable',
            'Model' => 'nullable',
            'BatteryId' => 'nullable',
            'SeatId' => 'nullable',
            'SpeedId' => 'nullable',
            'YearBuilt' => 'nullable',
        ]);
    }
}
