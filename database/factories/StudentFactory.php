<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'st_name' => $this->faker->name,
            'st_father_phone' => $this->faker->phoneNumber,
            'st_mother_phone' =>$this->faker->phoneNumber,
            'st_identity' =>$this->faker->phoneNumber,
            'st_date_of_birth' =>$this->faker->date(),


        ];

    }
}
