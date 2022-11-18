<?php 
namespace App\Models;

use CodeIgniter\Model;

class Product extends Model{
    protected $table      = 'products';
    // Uncomment below if you want add primary key
    protected $primaryKey = "ID";
    protected $allowedFields = ['ID' ,'NameProduct','Reference','Price','Weight','Category','Stock','CreationDate']; //Permite definir que campos de la tabla seran usados y de esta manera dar ciertos permisos de acceso
}