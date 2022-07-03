<?php

namespace Tests\Unit;

use App\Models\Dashboard;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    public function test_if_database_is_migrated_and_seeded_correctly()
    {
        $this->assertDatabaseHas('exams', ['id' => 1, 'dashboard_id' => 1, 'exam_Name' => 'Assessment Exam',
            'exam_Grade' => null]);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_course_grade_gets_calculated_correctly()
    {
        $this->assertDatabaseHas('exams', []);

        // When an exam_Grade is still null, it returns N/A
        $dashboard1 = Dashboard::all()->first();
        $this->assertEquals('N/A', $dashboard1->course_grade());

        $dashboard2 = Dashboard::where('id', 2)->first();
        $this->assertEquals(7, $dashboard2->course_grade());

    }
}
