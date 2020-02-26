<?php

use Illuminate\Database\Seeder;
use App\Casquette;

class CasquetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Casquette::class, 1)->create()->each(function ($casquette) {
            $casquette->save();
        });
    }
}
