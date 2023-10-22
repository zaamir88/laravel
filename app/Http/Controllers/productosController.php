<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function index()
    {
        return view('productos');
    }

    public function mostrar()
    {
        echo "metodo mostrar";
    }

    public function crear()
    {
        return view("crear");
    }

    public function dataformulario(Request $request)
    {
        return $request->input('nombre');
    }

}
