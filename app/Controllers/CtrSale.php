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
        return view('sales/create_sale');
    }

    public function save_sales() {
        $request = \Config\Services::request(); //Permite no tener error para trarer el dato
        $Product = new product();
        $sales = new Sale();
        /* RECOGER DATOS ENVIADOS Y VALIDARLOS */
        
        $IDSale = random_int(1000,80000);
        $IDProduct = $request->getVar('ID');//Trae el valor que se envia del formulario de crear
        $datos['name'] = $Product->where('ID', $IDProduct)->first();
        $ProductCant = $request->getVar('Cant');
        $NameProduct = strval($datos['name']['NameProduct']);
        $Reference = strval($datos['name']['Reference']);
        $Price = $datos['name']['Price'];
        $Price = intval($Price);//Comvierte todo el contenido del email en minuscula
        $WaytoPay = strval($request->getVar('MethodPay'));
        $Stock = $datos['name']['Stock'];
        $Stock = intval($Stock);
        $TotalPrice = $Price * $ProductCant;
        $CreationDate = date('Y-m-d');

        $NewStock = $Stock - $ProductCant;
        /* INICIO DE GUARDADO DE DATOS */
        $Datos=[
            'IDSale'=>$IDSale,
            'IDProduct'=>$IDProduct,
            'ProductCant'=>$ProductCant,
            'CreationDate'=>$CreationDate,
            'WaytoPay'=>$WaytoPay,
            'TotalPrice'=>$TotalPrice
        ];

        $DatoStock=[
            'Stock'=>$NewStock
        ];

        $sales->insert($Datos);
        $Product->update($IDProduct,$DatoStock);
        //Datos que se envian a la vista para comparar si mostrar o no determinada informacion por el switch case
        $Validacion['valor'] = 4;
        $Validacion['namepro'] = $NameProduct;
        return view('/');
    }
    
}