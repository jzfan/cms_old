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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'role_id' => mt_rand(0, 5),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => 'test',
//         'email' => 'test@test.com',
//         'role_id' => 0,
//         'password' => bcrypt('123'),
//     ];
// });
$factory->define(App\Role::class, function (Faker\Generator $faker){
	return [
		'name'=> $faker->word
	];
});
$factory->define(App\Permission::class, function (Faker\Generator $faker){
	return [
		'name'=> $faker->word
	];
});
