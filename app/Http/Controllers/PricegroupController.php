<?php

namespace App\Http\Controllers;

use App\Pricegroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PricegroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $this->validateDataFetch();
        if (key_exists('batteryId', $params)){
            $pricegroup = Pricegroup::where([
                ['BatteryId', '=', $params['batteryId']],
                ['SeatId', '=', $params['seatId']],
                ['SpeedId', '=', $params['speedId']],
            ])->first();
            return $pricegroup;
        }
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
        $pricegroup = Pricegroup::create($this->validateDataUpdate());
        return ($pricegroup);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pricegroup  $pricegroup
     * @return \Illuminate\Http\Response
     */
    public function show(Pricegroup $pricegroup)
    {
        // return $pricegroup;
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
        $params = $this->validateDataUpdate();
        DB::table('pricegroups')->where([
            ['BatteryId', '=', $params['batteryId']],
            ['SeatId', '=', $params['seatId']],
            ['SpeedId', '=', $params['speedId']],
        ])
            ->update(['Price' => $params['price']]);
        $new = Pricegroup::where([
            ['BatteryId', '=', $params['batteryId']],
            ['SeatId', '=', $params['seatId']],
            ['SpeedId', '=', $params['speedId']],
        ])->first();
        return ($new);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pricegroup  $pricegroup
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $params = $this->validateDataFetch();
        // $pricegroup = Pricegroup::where([
        //     ['BatteryId', '=', $params['batteryId']],
        //     ['SeatId', '=', $params['seatId']],
        //     ['SpeedId', '=', $params['speedId']],
        // ])->first();
        DB::table('pricegroups')->where([
            ['BatteryId', '=', $params['batteryId']],
            ['SeatId', '=', $params['seatId']],
            ['SpeedId', '=', $params['speedId']],
        ])->delete();
        return "Record deleted.";
    }

    private function validateData(Pricegroup $pricegroup=NULL)
    {
        return request()->validate([           
            'batteryId' => 'required|integer',
            'seatId' => 'required|integer',
            'speedId' => 'required|integer',
        ]);
    }

    private function validateDataFetch(Pricegroup $pricegroup=NULL)
    {
        return request()->validate([
            'batteryId' => 'required_with:seatId,speedId|integer',
            'seatId' => 'required_with:speedId,batteryId|integer',
            'speedId' => 'required_with:batteryId,seatId|integer',
        ]);
    }

    private function validateDataUpdate(Pricegroup $pricegroup=NULL)
    {
        return request()->validate([
            'batteryId' => 'required|integer',
            'seatId' => 'required|integer',
            'speedId' => 'required|integer',
            'price' => 'required|numeric',
        ]);
    }
}
