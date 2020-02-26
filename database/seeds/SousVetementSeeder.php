<?php

use Illuminate\Database\Seeder;
use App\SousVetement;

class SousVetementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SousVetement::class, 1)->create()->each(function ($sousvetement) {
            $sousvetement->save();
        });
    }
}
