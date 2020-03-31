<?php

use Illuminate\Database\Seeder;

class ScooterLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ScooterLocation::class, 100)->create();
    }
}
