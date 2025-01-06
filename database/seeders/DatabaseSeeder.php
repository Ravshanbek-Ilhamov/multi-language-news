<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        for ($i=0; $i <= 10 ; $i++) { 
            Category::create([
                'name' => [
                    'en' => 'Category '.$i,
                    'ru' => 'Категория '.$i,
                    'uz' => 'Kategoriya '.$i,
                ],
                'order' => $i
            ]);
        }

        for ($i=1; $i < 10 ; $i++) { 
            News::create([
                'title' => [
                    'en' => 'News '.$i,
                    'ru' => 'Новость '.$i,
                    'uz' => 'Yangilik '.$i,
                ],
                'content' => [
                    'en' => 'Content '.$i,
                    'ru' => 'Содержание '.$i,
                    'uz' => 'Mazmuni '.$i,
                ],
                'description' => [
                    'en' => 'Description '.$i,
                    'ru' => 'Описание '.$i,
                    'uz' => 'Tavsif '.$i,
                ],
                'category_id' => $i,
                        
            ]);
        }
    }
}
