<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function index()
    {
        return view('inicioalter');
    }
}
