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
            'Exam_Name' => 'Assessment Exam',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 2,
            'Exam_Name' => 'Written exam',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 3,
            'Exam_Name' => 'Case study exam',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 4,
            'Exam_Name' => 'Case study exam',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 4,
            'Exam_Name' => 'Project',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 5,
            'Exam_Name' => 'Case study exam',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 6,
            'Exam_Name' => 'Project',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 6,
            'Exam_Name' => 'Assessment',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 6,
            'Exam_Name' => 'Report',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 7,
            'Exam_Name' => 'Project',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'dashboard_id' => 7,
            'Exam_Name' => 'Assessment',
            'Exam_Grade' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
