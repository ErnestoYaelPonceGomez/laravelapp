<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationsController extends Controller
{
    public function mult($valor) {
        return $valor * 2;
    }

    public function cadenaMayus($cadena) {
        return strtoupper($cadena);
    }

    public function listaSum($lista) {
        return array_sum($lista);
    }

    public function diccionario($diccionario, $clave) {
        return isset($diccionario[$clave]) ? $diccionario[$clave] : null;
    }

    public function numPar($numero) {
        return $numero % 2 === 0;
    }
}
