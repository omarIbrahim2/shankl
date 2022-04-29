<?php

namespace Database\Factories;

use App\Models\parentt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\parentt>
 */
class parenttFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
      protected $model = parentt::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->word(4 , true),
            'email'=>$this->faker->safeEmail,
            'password'=>$this->faker->password,
            'phone'=>$this->faker->randomNumber(8),

        ];
    }
}
