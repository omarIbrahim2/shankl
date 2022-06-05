<?php

namespace Database\Factories;

use App\Models\supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = supplier::class;
    public function definition()
    {
        return [
            'name'=>$this->faker->name('male'),
            'email'=>$this->faker->freeEmail,
            'password'=>$this->faker->password,
            'phone'=>$this->faker->phoneNumber(),
            'orgName'=>$this->faker->company(),
            'address'=>$this->faker->address(),
            'type'=>$this->faker->word(4 , true),

        ];
    }
}
