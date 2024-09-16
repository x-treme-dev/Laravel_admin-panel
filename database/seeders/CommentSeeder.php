<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('unpublished')->insert([
            'name' => 'Goga',
            'phone'=> '324-23-234',
            'email' => 'goga@example.com',
             'message'=> 'goga...message',
             'rating'=>5,
        ]);

        DB::table('unpublished')->insert([
            'name' => 'Vova',
            'phone'=> '334-20-234',
            'email' => 'vova@example.com',
             'message'=> 'vova...message',
             'rating'=>4,
        ]);

        DB::table('unpublished')->insert([
            'name' => 'Sveta',
            'phone'=> '111-21-234',
            'email' => 'sveta@example.com',
             'message'=> 'sveta...message',
             'rating'=>3,
        ]);

        DB::table('unpublished')->insert([
            'name' => 'Petruchi',
            'phone'=> '176-21-234',
            'email' => 'pet@example.com',
             'message'=> 'petruchi...message',
             'rating'=>1,
        ]);
    }
}
