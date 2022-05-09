<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'category.name1',
                'description' => 'category.description1',
                'color_hex' => '7bd79a',
            ],
            [
                'name' => 'category.name2',
                'description' => 'category.description2',
                'color_hex' => '5c1378',
            ],
            [
                'name' => 'category.name3',
                'description' => 'category.description3',
                'color_hex' => 'cf8658',
            ]
        ];

        foreach ($data as $row) {
            DB::table('categories')->insert($row);
        }
    }
}
