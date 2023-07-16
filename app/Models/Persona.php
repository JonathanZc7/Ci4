<?php 
namespace App\Models;

use CodeIgniter\Model;

class Persona extends Model{
    protected $table      = 'persona';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields=['Id','Cedula','Nombres','Correo'];
}