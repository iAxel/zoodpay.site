<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $this->call(CitySeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
