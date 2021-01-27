<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Travel;
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

$factory->define(Travel::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'prefecture_id' => $faker->numberBetween(1,47),
        'gender' => $faker->randomElement($array = ['20歳未満','20-29歳', '30-39歳','40-49歳','50-59歳','60-69歳','70-79歳','80歳以上']),
        'age' => $faker->randomElement($array = ['男性', '女性']),
        'evaluation' => $faker->randomElement($array = ['最高', '普通','最悪']),
        'impressions' => $faker->realText($maxNbChars = 20, $indexSize = 1),
        'terms' => '利用規約に同意します'
    ];
});
