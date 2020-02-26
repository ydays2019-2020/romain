<?php

use Illuminate\Database\Seeder;
use App\Sticker;

class StickerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sticker::class, 1)->create()->each(function ($sticker) {
            $sticker->save();
        });
    }
}
