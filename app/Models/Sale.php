<?php 
namespace App\Models;

use CodeIgniter\Model;

class Sale extends Model{
    protected $table      = 'sales';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IDSale';
    protected $allowedFields = ['IDSale' ,'IDProduct','ProductCant','CreationDate','WaytoPay','TotalPrice']; //Permite definir que campos de la tabla seran usados y de esta manera dar ciertos permisos de acceso
}