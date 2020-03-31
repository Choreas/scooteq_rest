<?php

namespace App\Http\Controllers;

use App\Pricegroup;
use Illuminate\Http\Request;

class PricegroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pricegroup::all();
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
     * @param  \App\Pricegroup  $pricegroup
     * @return \Illuminate\Http\Response
     */
    public function show(Pricegroup $pricegroup)
    {
        return $pricegroup;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pricegroup  $pricegroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricegroup $pricegroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pricegroup  $pricegroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricegroup $pricegroup)
    {
        //
    }
}
