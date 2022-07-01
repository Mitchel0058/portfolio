<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dashboards')->insert([
            'year' => 1,
            'quartile' => 1,
            'course' => 'Programme and Career Orientation',
            'EC' => 2.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'year' => 1,
            'quartile' => 1,
            'course' => 'Computer Science Basics',
            'EC' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'year' => 1,
            'quartile' => 1,
            'course' => 'Programming Basics',
            'EC' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'year' => 1,
            'quartile' => 2,
            'course' => 'Object Oriented Programming',
            'EC' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'year' => 1,
            'quartile' => 3,
            'course' => 'Framework Development 1',
            'EC' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'year' => 1,
            'quartile' => 3,
            'course' => 'Framework Project 1',
            'EC' => 7.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'year' => 1,
            'quartile' => 4,
            'course' => 'Portfolio',
            'EC' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
