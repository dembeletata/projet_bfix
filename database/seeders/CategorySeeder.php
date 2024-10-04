<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['service' => 'Orange'],
            ['service' => 'Moov'],
            ['service' => 'Vts'],
            ['service' => 'Sancfis'],
            ['service' => 'Pav'],
            ['service' => 'Afreenet'],
            ['service' => 'Ipp'],
            ['service' => 'Ipsys'],
            ['service' => 'Gva'],
            ['service' => 'CanalBox'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
