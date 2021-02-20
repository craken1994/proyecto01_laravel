<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			 'names' => $this->faker->firstName() ,
			 'surnames' => $this->faker->lastName() . ' ' . $this->faker->lastName() ,
			 'dni' => mt_rand(10000000, 99999999)
        ];
    }
}
