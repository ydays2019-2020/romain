<?php

use Illuminate\Database\Seeder;
use App\Sweat;

class SweatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sweat::class, 1)->create()->each(function ($sweat) {
            $sweat->save();
        });
    }
}
