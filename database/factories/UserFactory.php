<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'role'  =>"Admin",
        'department' => "Department Of Computer Studies",
        'confirmation' =>000000,
        'confirmed' => false,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Article::class, function (Faker $faker){
	return [
		'title' =>$faker->sentence($nbWords = 6, $variableNbWords = true),
		'body' =>$faker->text($maxNbChars = 200),
		'department' => App\User::all()->random()->department,
		'author_id' =>App\User::all()->random()->id,
	];
});
