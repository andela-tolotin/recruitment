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

$factory->define(HumanResources\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(HumanResources\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(HumanResources\Skill::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'user_id' => 1,
    ];
});

$factory->define(HumanResources\Academic::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'institution' => $faker->name,
        'grade' => $faker->name,
        'qualification' =>  $faker->name,
        'start-date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'end-date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});

$factory->define(HumanResources\OtherInfo::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'phone'  => $faker->phoneNumber,
        'marital_status' => $faker->titleMale,
        'address' => $faker->address,
        'dateofbirth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gender' => $faker->title,
        'state' => $faker->state,
        'city' => $faker->city,
    ];
});

$factory->define(HumanResources\WorkExperience::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'company' => $faker->company,
        'position' => $faker->name,
        'job-description' => $faker->text,
        'start-date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'end-date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
