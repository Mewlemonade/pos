<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Post::create([
            'id' => '1',
            'title' => 'Contoh Post 1',
            'content' => 'Ini adalah konten dari Contoh Post 1.',
        ]);
    
        Post::create([
            'id' => '2',
            'title' => 'Contoh Post 2',
            'content' => 'Ini adalah konten dari Contoh Post 2.',
        ]);

        Post::create([
            'id' => '3',
            'title' => 'Contoh Post 3',
            'content' => 'Ini adalah konten dari Contoh Post 3.',
        ]);
    }
}
