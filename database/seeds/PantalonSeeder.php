<?php

use Illuminate\Database\Seeder;
use App\Pantalon;

class PantalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pantalon::class, 1)->create()->each(function ($pantalon) {
            $pantalon->save();
        });
    }
}
