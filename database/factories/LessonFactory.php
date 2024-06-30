<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    public function definition()
    {
        $classroom = Classroom::inRandomOrder()->first();
        $branch = Branch::inRandomOrder()->first();
        $teacher = Teacher::inRandomOrder()->first();
        return [
            'classroom_id '=> $classroom->id,
            'branch_id' => $branch->id,
            'teacher_id' => $teacher->id,
        ];
    }
}
