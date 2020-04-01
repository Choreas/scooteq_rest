<?php

use Illuminate\Database\Seeder;

class ScooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Scooter::class, 100)->create();
    }
}
