<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // membuat admin
        User::create([
            'name' => 'Admin',
            'username' => 'admin123',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        $this->call([
            CategorySeeder::class
        ]);

        Post::factory(12)->recycle(User::factory(4)->create())->create();
    }
}
