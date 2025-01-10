<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips cepat pintar', 'content'=>'lorem ipsum'],
            ['title'=>'Haruskah Menunda Belajar', 'content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Kesuksesan1', 'content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Kesuksesan2', 'content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Kesuksesan3', 'content'=>'lorem ipsum'],
        ];
        // masukkan data ke database
        DB::table('posts')->insert($posts);
    }
}
