<?php

namespace Database\Factories;

use App\Models\Roles;
use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserRolesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserRoles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'roles_id' => Roles::inRandomOrder()->first()->id
        ];
    }
}
