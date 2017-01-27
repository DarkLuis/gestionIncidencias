<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
        	'name'=>'Mesa de ayuda',
        	'description' => 'El proyecto mesa de ayuda consiste en prestar servicios para solucionar las incidencias tanto como clientes y trabajadores internos'
        	]);

    	Project::create([
    	'name'=>'Proyecto X',
    	'description' => 'El proyecto X es una dato de prueba'
    	]);
    }
}
