<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\persona;

class Personas extends Controller
{
    public function index()
    {
        $persona = new persona();
        $datos['Persona'] = $persona->orderBy('id', "ASC")->findAll();
        
        $datos['cabecera'] = view ('template/cabecera');
        $datos['piepagina'] = view ('template/piepagina');



        return view('personas/Listar', $datos);
    }

    public function crear(){
        
        $datos['cabecera'] = view ('template/cabecera');
        $datos['piepagina'] = view ('template/piepagina');
        
        return view('personas/crear', $datos);
    }

    public function guardar(){

        $persona = new Persona();
        $nombre = $_REQUEST['nombre'];
        
        print_r($nombre);   
    
    }



}
