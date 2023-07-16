<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        return view('personas/crear');
    
    }

    public function Prueba()
    {
        echo 'Hello esto es una prueba tarea Desarrollo de App';
        
     }
    

    public function Api()
    {
        $usuario = array
        ( 
        'usuario'=> 'pepe',
        'Nombre'=> 'Jose Calderon',
        'Ciudad'=> 'Manta',
        'Direccion'=> 'metro',
        'telefono'=> '098021233', 
        );
        
        return $this->response->setJSON($usuario); 
        
        
      } 
      public function Prueba2()
    {
        $this->db=\Config\Database::connect();
        
        $query=$this->db->query("SELECT * FROM `usuario`");
        $result=$query->getResult();
        return $this->response->setJSON($result);

     }
}
