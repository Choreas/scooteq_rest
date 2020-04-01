<?php

use Illuminate\Database\Seeder;

class BatteryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Battery::class, 10)->create();
    }
}
