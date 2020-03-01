<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tours\GroupTours;
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


$factory->define(GroupTours::class, function (Faker $faker) {
    return [
        'Tour_name' => $faker->name,
        'Description' => $faker->text,
        "Tour_slug"=>$faker->slug(2,true),
        "Terms_and_condition"=>$faker->text,
        "Booking_closes_on"=>\Carbon\Carbon::now()->addDays(20),
        'Created_at' => now()
    ];
});
