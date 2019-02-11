<?php

use Faker\Generator as Faker;

$factory->define(\App\Build::class, function (Faker $faker){
    return[
        'bu_name'      => $faker->word(10),
        'bu_price'     => $faker->randomElement($array = [100000, 400000, 300000, 200000, 500000, 600000], $count = 1),
        'bu_rent'      => $faker->numberBetween($min = 0, $max = 1),
        'bu_square'    => $faker->randomElement($array = [100, 400, 300, 200, 500, 600], $count = 1),
        'bu_type'      => $faker->randomDigitNotNull(),
        'bu_rooms'     => $faker->numberBetween($min = 1, $max = 20),
        'bu_small_des' => $faker->text($maxNBChars = 160),
        'bu_meta'      => $faker->sentence(4),
        'bn_latitude'  => $faker->latitude($min = -90, $max = 90),
        'bu_longitude' => $faker->longitude($min = -180, $max = 180),
        'bu_large_des' => $faker->text($maxNBChars = 200),
        'bu_status'    => $faker->numberBetween($min = 0, $max = 1),
        'user_id'      => $faker->randomDigitNotNull(),
        'bu_place'     => $faker->city(),
    ];
});