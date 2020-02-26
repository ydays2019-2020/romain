<?php

use Illuminate\Database\Seeder;
use App\Chaussette;

class ChaussetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Chaussette::class, 1)->create()->each(function ($chaussette) {
            $chaussette->save();
        });
    }

}