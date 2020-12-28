<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'post_id'=>\App\Post::all()->random(),
        'text'=> $faker->sentence
    ];
});
