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

        $datos=[
            'Id'=>$id,
            'Cedula'=>$cedula,
            'Correo'=>$correo,
            'Nombres'=>$nombre
        ];
        
        $persona->insert($datos);



        return view('personas/crear', $datos);

       

  
    
    }
     
    
    public function eliminar()
        {
            $Id = $this->input->post('Id'); // Obtener el valor de $Id desde la entrada del formulario o de donde corresponda
        
           $persona = new persona();
           $datos = $persona->where('Id', $Id)->get(); // Agregar el método get() para obtener los datos de la consulta
         
            if ($datos) {
                // Verificar si existe un Id asociado a la persona que se desea eliminar
                if (isset($datos->Id)) {
            }

        }

    
}
}

    



