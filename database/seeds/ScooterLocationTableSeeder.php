<?php

use App\Location;
use App\Scooter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScooterLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = Location::all();
        $scooters = Scooter::all();
        foreach ($locations as $location){
            foreach ($scooters as $scooter){
                $integer = random_int(0, 1);
                if (!$integer){
                    continue;
                }
                DB::table('scooter_locations')->insert([
                'ScooterId' => $scooter['id'],
                'LocationId' => $location['id'],
                'Pieces' => random_int(10, 100),
                'created_at' => now(),
                ]);
            }
        }
    }
}
