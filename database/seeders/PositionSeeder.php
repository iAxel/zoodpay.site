<?php

namespace Database\Seeders;

use App\Models\Position;

use Illuminate\Database\Seeder;

final class PositionSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $positions = [
            [
                'slug' => 'owner',
                'title_ru' => 'Владелец',
                'title_uz' => 'Xoʻjayin',
            ],
            [
                'slug' => 'manager',
                'title_ru' => 'Руководитель',
                'title_uz' => 'Boshqaruvchi',
            ],
            [
                'slug' => 'seller',
                'title_ru' => 'Продавец консультант',
                'title_uz' => 'Sotuvchi',
            ],
        ];

        foreach ($positions as $position) {
            Position::create($position);
        }
    }
}
