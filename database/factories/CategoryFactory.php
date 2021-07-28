<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $products=Product::pluck('id');
        return [
            'name' => $this->faker->words(2,true),
            'product_id'=>$products[rand(0,count($products)-1)],
            //'image' => $this->faker->imageUrl(),
        ];
    }
}
