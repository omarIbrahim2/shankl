<?php

namespace Database\Factories;

use App\Models\provider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\provider>
 */
class providerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = provider::class;
    public function definition()
    {

       static $types = ['Kindergarden', 'School', 'Nursery'];
       static $areas = ['Cairo' , "Giza" , 'Qaliubia'];
        static $eduSys = ['IG' , 'National program' , 'international' , 'SAT'];
        return [
            'name'=>$this->faker->word(4 , true),
            'email'=>$this->faker->freeEmail,
            'password'=>$this->faker->password,
            'area'=>$this->faker->randomElement($areas),
            'phone'=>$this->faker->randomNumber(8),
            'installments'=>$this->faker->numberBetween(500 , 3000),
            'seats'=>$this->faker->numberBetween(70 , 500),
            'seat_price'=>"200",
            'type'=>$this->faker->randomElement($types),
            'educational_system'=>$this->faker->randomElement($eduSys),
        ];
    }
}
