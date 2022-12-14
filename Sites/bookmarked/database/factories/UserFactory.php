<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fname = fake()->firstName();
        $minitial = fake()->regexify('[A-Z]{1}');
        $lname = fake()->lastName();
        $uname = $fname . $lname . fake()->randomNumber(3, true);

        return [
            'uname' => $uname,
            'fname' => $fname,
            'lname' => $lname,
            'minitial' => $minitial,
            'cluster' => fake()->randomDigit(),
            'bld' => fake()->randomDigit(),
            'flr' => fake()->randomDigit(),
            'unit' => fake()->randomDigit(),
            'contact' => fake()->phoneNumber(),
            'birthday' => fake()->date(),
            'email' => strtolower($uname . '@test.com'),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10), 
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
