<?php

namespace App\Http\Controllers;

use App\Models\Enlace;
use App\Models\Pagina;
use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    public function buscador()
    {
        $pagina = Pagina::where('nombre', 'enlace.index')->get()->first();
        return view('buscador',compact('pagina'));
    }



    public function buscar(Request $request)
    {


        switch ($request->input('action')) {
            case 'simple':
                $resultados = Enlace::join('indices', 'indices.id_enlace', 'enlaces.id')->join('palabras', 'palabras.id', 'indices.id_palabra')
                    ->where('palabras.nombre', 'LIKE', '%' . $request->nombre . '%')
                    ->select('enlaces.*')
                    ->distinct()
                    ->get()->keyBy('id');
                break;

            case 'avanzada':
                $palabras = explode(" ", $request->nombre);

                $resultados = [];
                foreach ($palabras as $pal) {
                    $enlaces = Enlace::join('indices', 'indices.id_enlace', 'enlaces.id')->join('palabras', 'palabras.id', 'indices.id_palabra')
                        ->where('palabras.nombre', 'LIKE', '%' . $pal . '%')
                        ->select('enlaces.*')
                        ->distinct()
                        ->get()->keyBy('id');

                    foreach ($enlaces as $enlace) {
                        if (!BuscadorController::existeID($resultados, $enlace->id)) {
                            array_push($resultados, $enlace);
                        }
                    }
                }

                break;
        }

        $pagina=Pagina::where('nombre','buscar')->get()->first();
        return view('resultado', compact('resultados','pagina'));
    }

    public function existeID($array, $id): bool
    {
        foreach ($array as $arr) {
            if ($arr->id == $id) {
                return true;
            }
        }
        return false;
    }
}
