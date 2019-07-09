<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();
        factory(App\Curso::class, 20)->create();
        factory(App\Ensenanza::class, 20)->create();
        factory(App\Estudiante::class, 20)->create();
    }
}
