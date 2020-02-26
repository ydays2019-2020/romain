<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AccessoireSeeder::class,
            AccueilSeeder::class,
            CasquetteSeeder::class,
            ChaussetteSeeder::class,
            ChaussureSeeder::class,
            CoqueSeeder::class,
            LifestyleSeeder::class,
            MaillotSeeder::class,
            ManteauSeeder::class,
            PantalonSeeder::class,
            PoloSeeder::class,
            RunningSeeder::class,
            ShortSeeder::class,
            SneakerSeeder::class,
            SousVetementSeeder::class,
            StickerSeeder::class,
            SurvetementSeeder::class,
            SweatSeeder::class,
            TeeshirtSeeder::class,
            VetementSeeder::class,
        ]);
    }
}
