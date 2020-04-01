<?php

namespace App\Http\Controllers;

use App\ScooterLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScooterLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $this->validateDataFetch();
        if (key_exists('scooterId', $params)){
            $scooterLocation = ScooterLocation::where([
                ['ScooterId', '=', $params['scooterId']],
                ['LocationId', '=', $params['locationId']],
            ])->first();
            return $scooterLocation;
        }
        return ScooterLocation::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scooterLocation = ScooterLocation::create($this->validateDataUpdate());
        return ($scooterLocation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ScooterLocation  $scooterLocation
     * @return \Illuminate\Http\Response
     */
    public function show(ScooterLocation $scooterLocation)
    {
        // return $scooterLocation;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScooterLocation  $scooterLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScooterLocation $scooterLocation)
    {
        $params = $this->validateDataUpdate();
        DB::table('scooter_locations')->where([
            ['ScooterId', '=', $params['scooterId']],
            ['LocationId', '=', $params['locationId']],
        ])->update(['Pieces' => $params['pieces']]);
        $new = ScooterLocation::where([
            ['ScooterId', '=', $params['scooterId']],
            ['LocationId', '=', $params['locationId']],
        ])->first();
        return ($new);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScooterLocation  $scooterLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $params = $this->validateDataFetch();
        // $scooterLocation = ScooterLocation::where([
        //     ['BatteryId', '=', $params['batteryId']],
        //     ['SeatId', '=', $params['seatId']],
        //     ['SpeedId', '=', $params['speedId']],
        // ])->first();
        DB::table('scooter_locations')->where([
            ['ScooterId', '=', $params['scooterId']],
            ['LocationId', '=', $params['locationId']],
        ])->delete();
        return "Record deleted.";
    }

    private function validateData(ScooterLocation $scooterLocation=NULL)
    {
        return request()->validate([           
            'scooterId' => 'required|integer',
            'locationId' => 'required|integer',
            'pieces' => 'required|integer',
        ]);
    }

    private function validateDataFetch(ScooterLocation $scooterLocation=NULL)
    {
        return request()->validate([
            'scooterId' => 'required_with:locationId|integer',
            'locationId' => 'required_with:scooterId|integer',
        ]);
    }

    private function validateDataUpdate(ScooterLocation $scooterLocation=NULL)
    {
        return request()->validate([
            'scooterId' => 'required|integer',
            'locationId' => 'required|integer',
            'pieces' => 'required|integer',
        ]);
    }
}
