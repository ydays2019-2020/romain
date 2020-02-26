<?php

use Illuminate\Database\Seeder;
use App\Short;

class ShortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Short::class, 1)->create()->each(function ($short) {
            $short->save();
        });
    }
}
