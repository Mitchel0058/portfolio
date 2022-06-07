<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            'dashboard_id' => 1,
            'exam_name' => 'Assessment Exam',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 2,
            'exam_name' => 'Written exam',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 3,
            'exam_name' => 'Case study exam',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 4,
            'exam_name' => 'Case study exam',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 4,
            'exam_name' => 'Project',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 5,
            'exam_name' => 'Case study exam',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 6,
            'exam_name' => 'Project',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 6,
            'exam_name' => 'Assessment',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 6,
            'exam_name' => 'Report',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 7,
            'exam_name' => 'Project',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 7,
            'exam_name' => 'Assessment',
            'exam_grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
