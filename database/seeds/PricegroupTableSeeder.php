<?php

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
        for ($i = 1; $i <= 3; $i++) {
            for ($ii = 1; $ii <= 3; $ii++){
                for ($iii = 1; $iii <= 3; $iii++){

                    DB::table('pricegroups')->insert([
                    'BatteryId' => $i,
                    'SeatId' => $ii,
                    'SpeedId' => $iii,
                    'Price' => $i + $ii + $iii,
                    ]);
                }
            }
        } 
    }
}
