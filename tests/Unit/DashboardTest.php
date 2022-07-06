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
        // make the rows to test
        $this->post('/dashboards', ['id' => 8, 'year' => 1, 'quartile' => 5, 'course' => 'Test course', 'EC' => 10,
            'created_at' => now(), 'updated_at' => now(),])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        $this->post('/exams', ['dashboard_id' => 8, 'exam_Name' => 'test exam', 'exam_Grade' => 5.5])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        // (5.5)/1=5.5
        $dashboardtest1 = Dashboard::where('id', 8)->first();
        $this->assertEquals(5.5, $dashboardtest1->course_grade());


        // make the rows to test
        $this->post('/dashboards', ['id' => 9, 'year' => 1, 'quartile' => 5, 'course' => 'Test course', 'EC' => 10,
            'created_at' => now(), 'updated_at' => now(),])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        $this->post('/exams', ['dashboard_id' => 9, 'exam_Name' => 'test exam', 'exam_Grade' => 8])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);
        $this->post('/exams', ['dashboard_id' => 9, 'exam_Name' => 'test exam', 'exam_Grade' => 4.5])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);
        $this->post('/exams', ['dashboard_id' => 9, 'exam_Name' => 'test exam', 'exam_Grade' => 7])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        // (8+4.5+7)/3=6.5
        $dashboardtest2 = Dashboard::where('id', 9)->first();
        $this->assertEquals(6.5, $dashboardtest2->course_grade());


        // make the rows to test
        $this->post('/dashboards', ['id' => 10, 'year' => 1, 'quartile' => 5, 'course' => 'Test course', 'EC' => 10,
            'created_at' => now(), 'updated_at' => now(),])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        $this->post('/exams', ['dashboard_id' => 10, 'exam_Name' => 'test exam', 'exam_Grade' => 10])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);
        $this->post('/exams', ['dashboard_id' => 10, 'exam_Name' => 'test exam', 'exam_Grade' => null])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        // if any is null it should return N/A
        $dashboardtest3 = Dashboard::where('id', 10)->first();
        $this->assertEquals('N/A', $dashboardtest3->course_grade());


        // make the rows to test
        $this->post('/dashboards', ['id' => 11, 'year' => 1, 'quartile' => 5, 'course' => 'Test course', 'EC' => 10,
            'created_at' => now(), 'updated_at' => now(),])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        $this->post('/exams', ['dashboard_id' => 11, 'exam_Name' => 'test exam', 'exam_Grade' => 1])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);
        $this->post('/exams', ['dashboard_id' => 11, 'exam_Name' => 'test exam', 'exam_Grade' => 2])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);
        $this->post('/exams', ['dashboard_id' => 11, 'exam_Name' => 'test exam', 'exam_Grade' => 5])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);
        $this->post('/exams', ['dashboard_id' => 11, 'exam_Name' => 'test exam', 'exam_Grade' => 8])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);
        $this->post('/exams', ['dashboard_id' => 11, 'exam_Name' => 'test exam', 'exam_Grade' => 9.7])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        // (1+2+5+8+9.7)/5=5.14
        $dashboardtest4 = Dashboard::where('id', 11)->first();
        $this->assertEquals('5.14', $dashboardtest4->course_grade());

        // make the rows to test
        $this->post('/dashboards', ['id' => 12, 'year' => 1, 'quartile' => 5, 'course' => 'Test course', 'EC' => 10,
            'created_at' => now(), 'updated_at' => now(),])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        // anything like negatives or above 10 doesn't need to be tested since it doesn't get through validation
        $this->post('/exams', ['dashboard_id' => 11, 'exam_Name' => 'test exam', 'exam_Grade' => -1])
            ->assertSessionHasErrors()
            ->assertStatus(302);
        $this->post('/exams', ['dashboard_id' => 11, 'exam_Name' => 'test exam', 'exam_Grade' => -11])
            ->assertSessionHasErrors()
            ->assertStatus(302);
    }
}
