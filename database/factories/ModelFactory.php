<?php

use Faker\Generator as Faker;
use Faker\Provider\Base;

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

$factory->define(App\Sensor::class, function (Faker $faker) {
    $array=[
        'temp' => $faker->numberBetween(15,30),
        'humitat' =>$faker->numberBetween(25,75),
        'pressio' =>$faker->numberBetween(980,1030),

    ];
    return $array;
});
