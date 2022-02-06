<?php

namespace Database\Seeders;

use App\Models\City;

use Illuminate\Database\Seeder;

final class CitySeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $cities = [
            [
                'slug' => 'tashkent',
                'title_ru' => 'Ташкент',
                'title_uz' => 'Toshkent',
            ],
            [
                'slug' => 'samarkand',
                'title_ru' => 'Самарканд',
                'title_uz' => 'Samarqand',
            ],
            [
                'slug' => 'andijan',
                'title_ru' => 'Андижан',
                'title_uz' => 'Andijon',
            ],
            [
                'slug' => 'fergana',
                'title_ru' => 'Фергана',
                'title_uz' => 'Fargʻona',
            ],
            [
                'slug' => 'other',
                'title_ru' => 'Другое',
                'title_uz' => 'Boshqa',
            ],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
