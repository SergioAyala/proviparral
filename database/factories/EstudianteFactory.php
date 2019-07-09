<?php

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

$factory->define(App\Estudiante::class, function (Faker $faker) {
    return [
        'cursos_id' => rand(1,19),
        'ensenanzas_id' => rand(1,19),
        'codigo_barra' => str_random(2),
        'nombres' => $faker->name,
         'apellidos' => str_random(2),
        'rut' => str_random(2),
        'domicilio' => str_random(2),
        'comuna' => str_random(2),
        'entrada_especial' => str_random(2),
        'permisos_entrada_id' => str_random(2),
        'salida_especial' => str_random(2),
        'permisos_salida_id' => str_random(2),
        'permisos_almuerzo_id' => str_random(2),
        'permisos_utp_id' => str_random(2),




    ];
});
