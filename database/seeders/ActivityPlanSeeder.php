<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('activity_plan')->insert([
                'activity_id' => Activity::all()->pluck('id')->random(),
                'plan_id' => Plan::all()->pluck('id')->random(),
            ]);

    }
}
