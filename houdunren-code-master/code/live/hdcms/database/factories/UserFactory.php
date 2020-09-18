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
        'email_verified_at' => now(),
        'password' => bcrypt('admin888'),
        'icon' => $faker->imageUrl(100, 100),
        'remember_token' => str_random(10),
        'group_id' => 1,
        'admin_end' => (new \Carbon\Carbon())->addYear(1),
        'lock' => false,
    ];
});
