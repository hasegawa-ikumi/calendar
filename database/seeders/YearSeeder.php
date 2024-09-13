<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('years')->insert([
    ['year' => '2020',
     'created_at' => new DateTime(),
     'updated_at' => new DateTime(),
    ],
    ['year' => '2021',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['year' => '2022',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['year' => '2023',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['year' => '2024',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['year' => '2025',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['year' => '2026',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ]);

    }
}
