<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    
    }

    public function Prueba()
    {
        echo 'Hello esto es una prueba';
        
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
        
        $query=$this->db->query("SELECT * FROM `usuario` ");
        $result=$query->getResult();
        return $this->response->setJSON($result);

        

     }
}
