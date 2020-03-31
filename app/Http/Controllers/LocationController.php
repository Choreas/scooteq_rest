<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\Http\Resources\Location as LocationResource;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Location::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $location = Location::create($this->validateData());
        return ($location);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return $location;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        Location::findOrFail($location['id'])->fill($this->validateDataUpdate())->save();
        $new = Location::findOrFail($location['id']);
        return ($new);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return "Record deleted.";
    }

    private function validateData(Location $location=NULL)
    {
        return request()->validate([
            'CountryCode' => 'required',
            'Description' => 'nullable',
            'Phone' => 'nullable',
            'PostalCode' => 'required',
            'City' => 'required',
            'Address' => 'required',
        ]);
    }

    private function validateDataUpdate(Location $location=NULL)
    {
        return request()->validate([
            'CountryCode' => 'nullable',
            'Description' => 'nullable',
            'Phone' => 'nullable',
            'PostalCode' => 'nullable',
            'City' => 'nullable',
            'Address' => 'nullable',
        ]);
    }
}
