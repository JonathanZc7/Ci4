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
        $datos['cabecera'] = view ('template/cabecera');
        $datos['piepagina'] = view ('template/piepagina');

        $persona = new persona();
        $id = $_REQUEST['Id'];
        $cedula = $_REQUEST['Cedula'];
        $nombre = $_REQUEST['Nombres'];
        $correo = $_REQUEST['Correo'];

       
        return view('personas/crear', $datos);

       
  
    
    }



}
