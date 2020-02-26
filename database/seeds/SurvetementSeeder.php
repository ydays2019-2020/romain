<?php

use Illuminate\Database\Seeder;
use App\Survetement;

class SurvetementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Survetement::class, 1)->create()->each(function ($survetement) {
            $survetement->save();
        });
    }
}
