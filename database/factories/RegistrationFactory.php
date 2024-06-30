<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\Student;;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $lesson = Lesson::inRandomOrder()->first();
        $student = Student::inRandomOrder()->first();
        $createdAt = fake()->dateTimeBetween('-10 months', 'now');
        return [
            'lesson_id '=> $lesson->id,
            'student_id' => $student->id,
            'price' => fake()->numberBetween(1000, 2000),
            'created_at' => Carbon::parse($createdAt),
            'updated_at' => Carbon::parse($createdAt)->addDays(rand(0, 6))->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
        ];
    }
}
