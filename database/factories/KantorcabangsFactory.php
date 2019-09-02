<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Kantorcabangs::class, function (Faker $faker) {
    return [
        'namecabang' => $faker->unique()->name,
        'slug' => Str::slug($faker->unique()->name, '-'),
    ];
});
