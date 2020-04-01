<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $this->validateDataFetch();
        if (key_exists('code', $params)){
            $country = Country::where('Code', $params['code'])->first();
            return $country;
        }
        return Country::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = Country::create($this->validateData());
        return ($country);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        // return $country;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $params = $this->validateDataUpdate();
        DB::table('countries')->where('Code', $params['code'])
            ->update(['Country' => $params['country']]);
        $new = Country::where('Code', $params['code'])->first();
        return ($new);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $params = $this->validateDataFetch();
        // $country = Country::where('Code', $params['code'])->first();
        DB::table('countries')->where('Code', $params['code'])
                     ->delete();
        return "Record deleted.";
    }

    private function validateData(Country $country=NULL)
    {
        return request()->validate([
            'code' => 'required|string|size:2',
            'description' => 'nullable|string',
        ]);
    }

    private function validateDataFetch(Country $country=NULL)
    {
        return request()->validate([
            'code' => 'nullable|string|size:2',
            'country' => 'nullable|string',
        ]);
    }

    private function validateDataUpdate(Country $country=NULL)
    {
        return request()->validate([
            'code' => 'required|string|size:2',
            'country' => 'required|string',
        ]);
    }
}
