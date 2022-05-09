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

        for ($i = 0; $i < 10; $i++) {
            $this->call(ActivityPlanSeeder::class);
        }

    }
}
