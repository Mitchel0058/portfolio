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
            'Year' => 1,
            'Quartile' => 1,
            'Course' => 'Programme and Career Orientation',
            'EC' => 2.5,
            'Course_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'Year' => 1,
            'Quartile' => 1,
            'Course' => 'Computer Science Basics',
            'EC' => 5,
            'Course_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'Year' => 1,
            'Quartile' => 1,
            'Course' => 'Programming Basics',
            'EC' => 5,
            'Course_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'Year' => 1,
            'Quartile' => 2,
            'Course' => 'Object Oriented Programming',
            'EC' => 10,
            'Course_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'Year' => 1,
            'Quartile' => 3,
            'Course' => 'Framework Development 1',
            'EC' => 5,
            'Course_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'Year' => 1,
            'Quartile' => 3,
            'Course' => 'Framework Project 1',
            'EC' => 7.5,
            'Course_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dashboards')->insert([
            'Year' => 1,
            'Quartile' => 4,
            'Course' => 'Portfolio',
            'EC' => 10,
            'Course_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
