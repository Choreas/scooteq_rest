<?php

use App\Battery;
use App\Seat;
use App\Speed;
use Brick\Math\BigInteger;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricegroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batteries = Battery::all();
        $seats = Seat::all();
        $speeds = Speed::all();

        foreach ($batteries as $battery) {
            foreach ($seats as $seat){
                foreach ($speeds as $speed){
                    DB::table('pricegroups')->insert([
                    'BatteryId' => $battery['id'],
                    'SeatId' => $seat['id'],
                    'SpeedId' => $speed['id'],
                    'Price' => $battery['id'] + $seat['id'] + $speed['id'],
                    'created_at' => now(),
                    ]);
                }
            }
        } 
    }
}
