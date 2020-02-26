<?php

use Illuminate\Database\Seeder;
use App\Running;

class RunningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Running::class, 1)->create()->each(function ($running) {
            $running->save();
        });
    }
}
