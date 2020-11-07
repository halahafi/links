<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'u_speed' => $faker->numberBetween($min = 40, $max = 130),
        'd_speed' => $faker->numberBetween($min = 80, $max = 200),
        'technology' => $faker->randomElement($array = array ('fibre','dialup')),
        'static_ip' => $faker->randomElement($array = array ('yes','no')),
        // 'images' => $faker->image('public/storage/images',640,480, null, false)->default('NULL'),
        // 'images' => $faker->image()->default('NULL'),
        'sub_id' => $faker->numberBetween($min = 1, $max = 100),
        'name' => $faker->word(),
        'price'=> $faker->numberBetween($min =500, $max = 1000),
    ];
});
