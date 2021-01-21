<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'content' =>  $faker->text(),
        'image' =>  $faker->imageUrl(1000, 1000, 'animals', true),
    ];
});
