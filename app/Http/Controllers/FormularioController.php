<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    //
    public function formulario()
    {
        return view('formularios/restaurante');
    }
    public function enviar()
    {
        return view('index/index');
    }
}
