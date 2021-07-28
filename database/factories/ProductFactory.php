<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories=Category::pluck('id');
        return [
            'name' => $this->faker->name,
            //'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomNumber(5),
            'descr' => $this->faker->realText(),
            'sale' => $this->faker->boolean,
            'category_id'=>$categories[rand(0,count($categories)-1)],
        ];
    }
}
