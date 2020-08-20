<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['user_id' => '1',
            'name' => 'Laravel',
            'slug' => 'Laravel',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],

            ['user_id' => '1',
                'name' => 'wordpress',
                'slug' => 'wordpress',
                'is_published' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            ['user_id' => '1',
                'name' => 'python',
                'slug' => 'python',
                'is_published' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            ['user_id' => '1',
                'name' => 'Javascript',
                'slug' => 'Javascript',
                'is_published' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            ['user_id' => '1',
                'name' => 'Django',
                'slug' => 'Django',
                'is_published' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
