<?php

use Illuminate\Database\Seeder;
use App\Manteau;

class ManteauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Manteau::class, 1)->create()->each(function ($manteau) {
            $manteau->save();
        });
    }
}
