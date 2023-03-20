<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    private array $categories = [
        ['name' => 'Лесные жители', 'code' => 'lesnue-zhiteli'],
        ['name' => 'Веселая ферма', 'code' => 'veselaya-ferma'],
        ['name' => 'Дикие обитатели', 'code' => 'dikie-obitateli'],
    ];

    public function run(): void
    {
        foreach ($this->categories as $category)
        {
            DB::table('categories')->insert($category);
        }
    }
}
