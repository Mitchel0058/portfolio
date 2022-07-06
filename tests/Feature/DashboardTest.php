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
        $this->put('/exams/3', ['dashboard_id' => 3, 'exam_Name' => 'exam', 'exam_Grade' => 3.2])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);

        $this->put('/exams/4', ['dashboard_id' => 1, 'exam_Name' => 'exam', 'exam_Grade' => 4])
            ->assertSessionHasNoErrors()
            ->assertStatus(302);
    }

    /**
     * Test if it gets added to the database correctly
     *
     * @return void
     */
    public function test_exam_grade_gets_updated_correctly()
    {
        // these should be this now that it was updated
        $this->assertDatabaseHas('exams', ['dashboard_id' => 3, 'exam_Name' => 'exam', 'exam_Grade' => 3.2]);
        $this->assertDatabaseHas('exams', ['dashboard_id' => 1, 'exam_Name' => 'exam', 'exam_Grade' => 4]);
    }

    public function test_exam_denies_validation_correctly()
    {
        // create a row to test all the update validation, it has id 12 by default after seeding
        $this->post('/exams', ['dashboard_id' => 7, 'exam_Name' => 'update exam', 'exam_Grade' => 5]);

        // when nothing gets sent
        $this->put('/exams/12', [])->assertSessionHasErrors()->assertStatus(302);

        // when all are wrong inputs
        $this->put('/exams/12', ['dashboard_id' => 'string', 'exam_Name' => 5, 'exam_Grade' => 'string'])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts that exam_Grade can't be over 10
        $this->put('/exams/12', ['dashboard_id' => 1, 'exam_Name' => 'exams', 'exam_Grade' => 11])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts dashboard_id not int
        $this->put('/exams/12', ['dashboard_id' => 'test', 'exam_Name' => 'exams', 'exam_Grade' => 5])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts dashboard_id less than 0
        $this->put('/exams/12', ['dashboard_id' => -10, 'exam_Name' => 'exams', 'exam_Grade' => 5])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts exam_Name not string
        $this->put('/exams/12', ['dashboard_id' => 1, 'exam_Name' => 5, 'exam_Grade' => 5])
            ->assertSessionHasErrors()->assertStatus(302);

        //asserts exam_Grade not int
        $this->put('/exams/12', ['dashboard_id' => 1, 'exam_Name' => 'exams', 'exam_Grade' => 'string'])
            ->assertSessionHasErrors()->assertStatus(302);
    }

    public function test_exam_does_not_update_validation_failed_rows()
    {
        // all of the previous function's update should have failed validation,
        // thus the row should be the same as when posted
        $this->assertDatabaseHas('exams', ['dashboard_id' => 7, 'exam_Name' => 'update exam', 'exam_Grade' => 5]);
    }
}
