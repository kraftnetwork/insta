<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tours\TourPackage;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(TourPackage::class, function (Faker $faker) {
    return [
        'Package_name' => $faker->name,
        'Price' => $faker->numberBetween(100,100000),
        'Package_image' => 'images/destination1.jpg',
        'Description' => $faker->text,
    ];
});
