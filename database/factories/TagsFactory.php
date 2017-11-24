<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {

  return [
      'label' => $faker->words($nb = 3, $asText = false),
  ];
});
