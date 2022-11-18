<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Sale;
use App\Models\Product;
class CtrSale extends Controller{

    public function index() {
        $sales = new Sale();
        $datos['ventas']= $sales->orderBy('TotalPrice','DESC')->findAll();
        return view('sales/sale_page', $datos);
    }

    public function createpage() {
        $sales = new Sale();
        $datos['ventas']= $sales->orderBy('TotalPrice','DESC')->findAll();
        return view('sales/create_sale', $datos);
    }
    
}