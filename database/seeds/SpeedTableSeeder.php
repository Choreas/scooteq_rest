<?php

use Illuminate\Database\Seeder;

class SpeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Speed::class, 10)->create();
    }
}
