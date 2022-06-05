<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $i = 0;
        $i++;
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->freeEmail,
            'password'=>$this->faker->password,
            'cv' =>$this->faker->word(7),
            'field' => $this->faker->catchPhrase(),
            'phone'=>$this->faker->phoneNumber(),
            'image' => "uploads/services/$i.png",


        ];
    }
}
