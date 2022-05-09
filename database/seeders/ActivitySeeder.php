<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
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
                'name' => 'activity.name1',
                'description' => 'activity.description1',
                'icon_filename' => 'activity1_icon.gif',
            ],
            [
                'name' => 'activity.name2',
                'description' => 'activity.description2',
                'icon_filename' => 'activity2_icon.gif',
            ],
            [
                'name' => 'activity.name3',
                'description' => 'activity.description3',
                'icon_filename' => 'activity3_icon.gif',
            ]
        ];

        foreach ($data as $row) {
            DB::table('activities')->insert($row);
        }
    }
}
