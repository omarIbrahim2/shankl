<?php

namespace Database\Factories;

use App\Models\supplier;
use App\Models\teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
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
            'price'=>"200",
            'desc' => $this->faker->text,
            'img' => "uploads/services/$i.png",
            'category_id'=>$this->faker->numberBetween(1 , 5),
            'serviceable_type'=>$this->faker->randomElement([supplier::class , teacher::class]),
            'serviceable_id'=>$this->faker->numberBetween(1 , 20),



        ];
    }
}
