<?php

namespace Database\Factories;

use App\Models\event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event>
 */
class eventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = event::class;
    public function definition()
    {
        static $i = 0;
        $i++;
        return [
            "name" => $this->faker->word(),
            "image"=>"$i.png",
            'desc'=>$this->faker->text(),
            "startDate"=>$this->faker->date(),
            "endDate"=>$this->faker->date(),
        ];
    }
}
