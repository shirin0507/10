<?php

namespace Database\Factories;

use App\Models\FirstName;
use App\Models\LastName;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    public function definition(): array
    {
        $firstName = FirstName::inRAndomOrder()->first();
        $lastName = LastName::inRAndomOrder()->first();
        return [
            'first_name' => $firstName->firstName,
            'last_name' => $lastName->lastName,
        ];
    }
}
