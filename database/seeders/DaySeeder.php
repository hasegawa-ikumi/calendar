<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
               DB::table('days')->insert([
    ['day' => '1日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTime(),
    ],
    ['day' => '2日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '3日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '4日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '5日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '6日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '7日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '8日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '9日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '10日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '11日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '12日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '13日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '14日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '15日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '16日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '17日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '18日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '19日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '20日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '21日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '22日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '23日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '24日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '25日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ['day' => '26日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['day' => '27日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['day' => '28日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['day' => '29日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['day' => '30日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
     ['day' => '31日',
     'created_at' => new DateTime(),
     'updated_at' => new DateTIme(),
    ],
    ]);
    }
}
