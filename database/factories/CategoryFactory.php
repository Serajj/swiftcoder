<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category_name' =>  $faker->word,
        'status' => 1,
        'user_id' => App\User::all()->random()->id
    ];
});
