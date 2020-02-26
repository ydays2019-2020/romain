<?php

use Illuminate\Database\Seeder;
use App\Maillot;

class MaillotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Maillot::class, 1)->create()->each(function ($maillot) {
            $maillot->save();
        });
    }
}
