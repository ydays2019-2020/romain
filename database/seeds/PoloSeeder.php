<?php

use Illuminate\Database\Seeder;
use App\Polo;

class PoloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Polo::class, 1)->create()->each(function ($polo) {
            $polo->save();
        });
    }
}
