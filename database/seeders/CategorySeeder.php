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
        $categories = ["Work", "Thinking", "Creativity", "Reflection"];

        foreach($categories as $categoryName) {
            Category::create([
                "name" => $categoryName,
                "description" => "lorem ipsum dolor sit amet",
                "icon" => "path/icon.jpg"
            ]);
        }
    }
}
