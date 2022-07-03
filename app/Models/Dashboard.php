<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    public function exam()
    {
        return $this->hasMany(Exam::class);
    }

    public function course_grade()
    {
        $totalExamGrade = 0;
        $totalExams = 0;
        foreach ($this->exam as $exam) {
            $totalExamGrade += $exam->exam_Grade;
            $totalExams++;
            if ($exam->exam_Grade === null) {
                return "N/A";
            }
        }
        $course_grade = $totalExamGrade / $totalExams;
        return $course_grade;
    }

}
