<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\News;
use App\Models\NewsComment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'status' => 'admin'
        ]);

        Article::factory(20)->create();
        News::factory(30)->create();

        ArticleComment::factory(100)->create();
        NewsComment::factory(120)->create();
    }
}
