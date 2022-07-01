<?php

namespace Tests\Feature;

use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_exam_grade_gets_validated_correctly()
    {
        $this->post('/exams', ['dashboard_id' => 1, 'exam_Name' => 'exam', 'exam_Grade' => null])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        $this->post('/exams', ['dashboard_id' => 1, 'exam_Name' => 'exam', 'exam_Grade' => 10])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);
    }

    /**
     * Test if it gets added to the database correctly
     *
     * @return void
     */
    public function test_exam_grade_gets_added_correctly()
    {
        $this->assertDatabaseHas('exams', ['dashboard_id' => 1, 'exam_Name' => 'exam', 'exam_Grade' => null]);
        $this->assertDatabaseHas('exams', ['dashboard_id' => 1, 'exam_Name' => 'exam', 'exam_Grade' => 10]);
    }

    public function test_exam_denies_validation_correctly()
    {
        // when nothing gets sent
        $this->post('/exams', [])->assertSessionHasErrors()->assertStatus(302);

        // when all are wrong inputs
        $this->post('/exams', ['dashboard_id' => 'string', 'exam_Name' => 5, 'exam_Grade' => 'string'])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts that exam_Grade can't be over 10
        $this->post('/exams', ['dashboard_id' => 1, 'exam_Name' => 'exams', 'exam_Grade' => 11])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts dashboard_id not int
        $this->post('/exams', ['dashboard_id' => 'test', 'exam_Name' => 'exams', 'exam_Grade' => 5])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts dashboard_id less than 0
        $this->post('/exams', ['dashboard_id' => -10, 'exam_Name' => 'exams', 'exam_Grade' => 5])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts exam_Name not string
        $this->post('/exams', ['dashboard_id' => 2, 'exam_Name' => 5, 'exam_Grade' => 5])
            ->assertSessionHasErrors()->assertStatus(302);

        //asserts exam_Grade not int
        $this->post('/exams', ['dashboard_id' => 2, 'exam_Name' => 'many exams', 'exam_Grade' => 'string'])
            ->assertSessionHasErrors()->assertStatus(302);
    }

    public function test_exam_does_not_add_validation_failed_rows()
    {
        $this->assertDatabaseMissing('exams', ['dashboard_id' => null, 'exam_Name' => null, 'exam_Grade' => null]);
        $this->assertDatabaseMissing('exams', ['dashboard_id' => 'string', 'exam_Name' => 5, 'exam_Grade' => 'string']);
        $this->assertDatabaseMissing('exams', ['dashboard_id' => 1, 'exam_Name' => 'exams', 'exam_Grade' => 11]);
        $this->assertDatabaseMissing('exams', ['dashboard_id' => 'test', 'exam_Name' => 'exams', 'exam_Grade' => 5]);
        $this->assertDatabaseMissing('exams', ['dashboard_id' => -10, 'exam_Name' => 'exams', 'exam_Grade' => 5]);
        $this->assertDatabaseMissing('exams', ['dashboard_id' => 2, 'exam_Name' => 5, 'exam_Grade' => 5]);
        $this->assertDatabaseMissing('exams', ['dashboard_id' => 2, 'exam_Name' => 'many exams', 'exam_Grade' => 'string']);
        $this->assertDatabaseMissing('exams', ['dashboard_id' => 1, 'exam_Name' => 'exams', 'exam_Grade' => 11]);
        $this->assertDatabaseMissing('exams', ['dashboard_id' => 1, 'exam_Name' => 'exams', 'exam_Grade' => 11]);
        $this->assertDatabaseMissing('exams', ['dashboard_id' => 1, 'exam_Name' => 'exams', 'exam_Grade' => 11]);
    }
}
