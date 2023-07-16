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
        return view('personas/Listar', $datos);
    }
}
