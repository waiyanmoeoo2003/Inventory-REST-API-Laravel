<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>rand(1,9),
            'name'=>$this->faker->name,
            'code'=>rand(1000,9999),
            'qty'=>rand(1,100),
            'buy_price'=>rand(1,9)*1000,
            'sell_price'=>rand(1,9)*1000,
            'sold_out_qty'=>rand(1,30),
            'status'=>0
        ];
    }
}
