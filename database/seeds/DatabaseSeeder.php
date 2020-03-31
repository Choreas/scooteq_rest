<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BatteryTableSeeder::class,
            SpeedTableSeeder::class,
            SeatTableSeeder::class,
            ScooterTableSeeder::class,
            CountryTableSeeder::class,
            CustomerTableSeeder::class,
            PricegroupTableSeeder::class,
            LocationTableSeeder::class,
            ScooterLocationTableSeeder::class,
            ContractTableSeeder::class,
        ]);
    }
}
