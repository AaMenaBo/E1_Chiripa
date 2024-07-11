<?php

namespace App\Http\Controllers;

use App\Models\Apuesta;
use App\Models\Juego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JuegoController extends Controller
{
    public function index()
    {
        $apuestasDe3 = $this->apuestasJugadoresMayor3();
        return view('juegos.index', [
            'apuestas' => Apuesta::all(),
            'apuestasDe3' => $apuestasDe3,
        ]);
    }
    private function apuestasJugadoresMayor3()
    {
        $apuestasDe3 = 0;
        $apuestas = Apuesta::all();
        foreach ($apuestas as $apuesta) {
            $cantJugadores = $apuesta->juego->cantidad_jugadores;
            if ($cantJugadores > 3) {
                $apuestasDe3++;
            }
        }
        return $apuestasDe3;
    }
}
