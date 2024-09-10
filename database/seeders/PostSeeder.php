<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('posts')->insert([
                'title'=>1,
                'body' =>1,           
                //'user_id' => 1,
                'year_id' => 1,
                'month_id' => 1,
                'day_id' => 1,
                'image_url' => 'test_url',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
         ]);
    }
}
