<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    private array $collections = [
        ['name' => 'овечки', 'code' => 'ovechki'],
        ['name' => 'единороги', 'code' => 'edinorigi']
    ];

    public function run(): void
    {
        foreach ($this->collections as $collection)
        {
            DB::table('collections')->insert($collection);
        }
    }
}
