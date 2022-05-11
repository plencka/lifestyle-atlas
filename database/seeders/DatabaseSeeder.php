<?php

namespace Database\Seeders;


use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActivitySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(RoleSeeder::class);
        User::factory(10)->create();
        Plan::factory(10)->create();
        $plans = Plan::all();

        foreach ($plans as $plan) {
            for ($i = 0; $i <= rand(1,5); $i++) {
                $this->call(ActivityPlanSeeder::class, false, ['id' => $plan['id']]);
            }
        }

    }
}
