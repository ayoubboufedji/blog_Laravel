<?php

use Illuminate\Support\Str;
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

$factory->define(App\Post::class, function (Faker $faker) {
        $users = App\User::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($users),
        'post_content' => $faker->paragraph(),
        'post_title' => $faker->title(),
        'post_status' => $faker->title(),
        'post_name' => $faker->name,
        'post_type' => 'article',
        'post_category' => $faker->name,
        'updated_at'=>now(),
        //'created_at'=>time(),
       // 'post_type' => 'article',
        //'usr_id' => factory('App\User')->create()->id,

    ];
});
