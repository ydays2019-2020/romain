<?php

use Illuminate\Database\Seeder;
use App\Sneaker;

class SneakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sneaker::class, 1)->create()->each(function ($sneaker) {
            $sneaker->save();
        });
    }
}
