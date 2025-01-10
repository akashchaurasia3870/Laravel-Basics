<?php

namespace Database\Factories;

use App\Models\new_student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class new_studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = new_student::class;

    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'age'=>fake()->numberBetween(15,30),
            'email'=>fake()->email(),
            'address'=>fake()->address(),
            'city'=>fake()->city(),
            'phone'=>fake()->phoneNumber(),
            'password'=>fake()->password(),
        ];
    }
}
