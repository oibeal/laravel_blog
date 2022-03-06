<?php

namespace Database\Seeders;

use App\Models\Curso;
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
        \App\Models\User::factory(10)->create();

        // $this->call(CursoSeeder::class);
        Curso::factory(50)->create(); // en Laravel 8 se recomienda hacerlo 
                                      // asi si solo vas a usar una linea de codigo
    }
}
