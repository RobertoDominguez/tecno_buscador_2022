<?php

namespace Database\Seeders;

use App\Models\Pagina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaginaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LOGIN
        Pagina::create([
            'nombre' => 'login.view',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'buscador',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'buscar',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'admin.reportes',
            'veces_visitado' => 0
        ]);


        //USUARIO
        Pagina::create([
            'nombre' => 'usuario.index',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'usuario.create',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'usuario.edit',
            'veces_visitado' => 0
        ]);


        //ENLACE
        Pagina::create([
            'nombre' => 'enlace.index',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'enlace.create',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'enlace.edit',
            'veces_visitado' => 0
        ]);

        //PALABRA
        Pagina::create([
            'nombre' => 'palabra.index',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'palabra.create',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'palabra.edit',
            'veces_visitado' => 0
        ]);

        //INDICE
        Pagina::create([
            'nombre' => 'indice.index',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'indice.create',
            'veces_visitado' => 0
        ]);

        //BUSCADOR
        Pagina::create([
            'nombre' => 'buscador',
            'veces_visitado' => 0
        ]);

        Pagina::create([
            'nombre' => 'buscar',
            'veces_visitado' => 0
        ]);
    }
}
