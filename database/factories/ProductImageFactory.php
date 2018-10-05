<?php

use Faker\Generator as Faker;
use App\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(250,250),    // 250*250 tamaño de la imagen
        'product_id' => $faker->numberBetween(1, 100) // 1, 100 el id que se genera (son 100 productos los que se crearan)
    ];
});
