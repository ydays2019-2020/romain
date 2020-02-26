<?php

use Illuminate\Database\Seeder;
use App\Chaussure;

class ChaussureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Chaussure::class, 1)->create()->each(function ($chaussure) {
            $chaussure->save();
        });
    }
}
