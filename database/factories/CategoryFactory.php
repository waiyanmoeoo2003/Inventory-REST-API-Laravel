<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'label'=>$this->faker->sentence,
            'description'=>$this->faker->paragraph,
            'status'=>0,
            
        ];
    }
}
