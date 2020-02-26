<?php

use Illuminate\Database\Seeder;
use App\Lifestyle;

class LifestyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Lifestyle::class, 1)->create()->each(function ($lifestyle) {
            $lifestyle->save();
        });
    }
}
