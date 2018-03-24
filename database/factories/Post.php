<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {

    return [
        'title'=>$faker->sentence,
        'body'=>$faker->paragraph(45),
        'category'=>rand(1,4),
        'image'=>$faker->imageUrl(1600,1024)
    ];
});
