<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email address' => $faker->email,
        'subject' => $faker->sentence,
        'message' => $faker->text,
       // 'ip' => $faker->ipv4
    ];
});
