<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
        ->count(5)
        ->create();
        Product::factory()
            ->count(50)
            ->create();
        User::factory()
            ->count(5)
            ->create();
        DB::table('roles')->insert([
            'name' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Moder',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'User',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        UserRoles::factory()
            ->count(5)
            ->create();

    }
}
