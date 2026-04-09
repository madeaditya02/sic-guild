<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ["Teknologi", "Budaya", "Sosial", "Linkungan"];

        foreach($categories as $categoryName) {
            Category::create([
                "name" => $categoryName
            ]);
        }
    }
}
