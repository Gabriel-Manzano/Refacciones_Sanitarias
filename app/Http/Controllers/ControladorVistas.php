<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function login(){
        return view('login');
    }

    public function registro(){
        return view('registro');
    }

    public function inicio(){
        return view('inicio');
    }

    public function perfil(){
        return view('perfil');
    }
    
    public function carrito(){
        return view('carrito');
    }


    public function gestionProduct(){
        return view('gestionProduct');
    }
}
