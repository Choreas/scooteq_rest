<?php

namespace App\Http\Controllers;

use App\Speed;
use Illuminate\Http\Request;
use App\Http\Resources\Speed as SpeedResource;

class SpeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Speed::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $speed = Speed::create($this->validateData());
        return ($speed);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Speed  $speed
     * @return \Illuminate\Http\Response
     */
    public function show(Speed $speed)
    {
        return $speed;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Speed  $speed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speed $speed)
    {
        Speed::findOrFail($speed['id'])->fill($this->validateDataUpdate())->save();
        $new = Speed::findOrFail($speed['id']);
        return ($new);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Speed  $speed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speed $speed)
    {
        $speed->delete();
        return "Record deleted.";
    }

    private function validateData(Speed $speed=NULL)
    {
        return request()->validate([
            'description' => 'required',
        ]);
    }

    private function validateDataUpdate(Speed $speed=NULL)
    {
        return request()->validate([
            'description' => 'required',
        ]);
    }
}
