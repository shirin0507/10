<?php

namespace Database\Factories;

use App\Models\FirstName;
use App\Models\LastName;
use App\Models\Phone;
use App\Models\Birthday;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    public function definition(): array
    {
        $firstName = FirstName::inRAndomOrder()->first();
        $lastName = LastName::inRAndomOrder()->first();
        $phone = Phone::inRAndomOrder()->first();
        $birthday = Birthday::inRAndomOrder()->first();
        $gender = fake()->randomElement(['male', 'female']);
        $createdAt = fake()->dateTimeBetween('-10 months', 'now');
        return [
            'first_name' => $firstName->firstName,
            'last_name' => $lastName->lastName,
            'phone' => $phone->phoneNumber,
            'birthday' => $birthday->date,
            'gender' => Carbon::parse($gender),
            'created_at' => Carbon::parse($createdAt),
        ];
    }
}
