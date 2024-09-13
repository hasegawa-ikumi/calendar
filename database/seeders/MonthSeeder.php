<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('months')->insert([
    ['month' => '1月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTime(),
    ],
    ['month' => '2月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['month' => '3月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['month' => '4月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['month' => '5月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['month' => '6月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['month' => '7月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['month' => '8月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['month' => '9月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['month' => '10月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['month' => '11月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['month' => '12月',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    
    ]);

    
    }
}
