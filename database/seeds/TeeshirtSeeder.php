<?php

use Illuminate\Database\Seeder;
use App\Teeshirt;

class TeeshirtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Teeshirt::class, 1)->create()->each(function ($teeshirt) {
            $teeshirt->save();
        });
    }
}
