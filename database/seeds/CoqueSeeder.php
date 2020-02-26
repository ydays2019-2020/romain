<?php

use Illuminate\Database\Seeder;
use App\Coque;

class CoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Coque::class, 1)->create()->each(function ($coque) {
            $coque->save();
        });
    }
}
