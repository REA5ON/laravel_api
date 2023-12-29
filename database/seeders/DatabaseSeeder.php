<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $count = 10;

        Category::factory($count)->create();

        Post::factory()
            ->count($count * 100)
            ->state(new Sequence(
                fn (Sequence $sequence) => ['category_id' => Category::all()->random()],
            ))
            ->create();
    }
}
