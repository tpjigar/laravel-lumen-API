<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
use Illuminate\Support\Str;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
    	'uniquecode'     => Str::random(32), //$faker->uniquecode, //$faker->unique(),
        'firstname'     => $faker->name,
        'lastname'     => $faker->name,
        'email'    => $faker->unique()->email,
        'password' => app('hash')->make('12345'), 
        'app_token' => Str::random(255),
    ];
});
