<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
  return [
    'id' => $faker->randomDigit,
    'name' => $faker->paragraph,
    'url' => $faker->url,
    'description' => $faker->paragraph,
];
});
