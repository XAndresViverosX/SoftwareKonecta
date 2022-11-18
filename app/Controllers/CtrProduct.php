<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\product;
class CtrProduct extends Controller{

    public function index() {

        $Product = new product();
        $datos['productos']=$Product->orderBy('Stock','ASC')->findAll();
        return view('home_page', $datos);
    }

    public function create(){
        return view('products_functions/create_product');
    }

    public function save(){
        $request = \Config\Services::request(); //Permite no tener error para trarer el dato
        $Product = new product();

        /* RECOGER DATOS ENVIADOS Y VALIDARLOS */

        $ID = $request->getVar('ID');//Trae el valor que se envia del formulario de crear
        $NameProduct = $request->getVar('nombre');
        $Reference = $request->getVar('referencia');
        $Price = $request->getVar('precio');
        $Price = intval($Price);//Comvierte todo el contenido del email en minuscula
        $Weight = $request->getVar('peso');
        $Weight = intval($Weight);
        $Category = $request->getVar('categoria');
        $Stock = $request->getVar('stock');
        $Stock = intval($Stock);
        $CreationDate = date('Y-m-d');


        /* INICIO DE GUARDADO DE DATOS */
        $Datos=[
            'ID'=>$ID,
            'NameProduct'=>$NameProduct,
            'Reference'=>$Reference,
            'Price'=>$Price,
            'Weight'=>$Weight,
            'Category'=>$Category,
            'Stock'=>$Stock,
            'CreationDate'=>$CreationDate,
        ];
        $Product->insert($Datos);

        //Datos que se envian a la vista para comparar si mostrar o no determinada informacion por el switch case
        $Validacion['valor'] = 1;
        $Validacion['namepro'] = $NameProduct;
        return view('products_functions/information_messages',$Validacion);
    }

    public function deleteconfirm($id=null){
        $Product = new product();
        $datos['id_edit'] = $Product->where('ID', $id)->first();
        
        return view('products_functions/delete_product',$datos);
    }

    public function delete($id=null){
        $Product = new product();

        $datos['name'] = $Product->where('ID', $id)->first();    
        $Product->where('ID', $id)->delete($id);
        $validar = $Product->where('ID', $id)->first();  
        if (!empty($validar)) {
            $Validacion['valor'] = 7;

        return view('products_functions/information_messages',$Validacion);
        }else{
            $Validacion['namepro'] = $datos['name']['NameProduct'];
            $Validacion['valor'] = 3;
            return view('products_functions/information_messages',$Validacion);
        }
    }

    public function edit($id=null){
        $Product = new product();
        $datos['id_edit'] = $Product->where('ID', $id)->first();
        
        return view('products_functions/edit_product',$datos);
    }

    public function update(){
        $request = \Config\Services::request(); //Permite no tener error para trarer el dato
        $Product = new product();

        /* RECOGER DATOS ENVIADOS Y VALIDARLOS */
        $id = $request->getVar('id');
        $NameProduct = $request->getVar('nombre');
        $Reference = $request->getVar('referencia');
        $Price = $request->getVar('precio');
        $Price = intval($Price);//Comvierte todo el contenido del email en minuscula
        $Weight = $request->getVar('peso');
        $Weight = intval($Weight);
        $Category = $request->getVar('categoria');
        $Stock = $request->getVar('stock');
        $Stock = intval($Stock);


        /* INICIO DE GUARDADO DE DATOS */
        $Datos=[
            'NameProduct'=>$NameProduct,
            'Reference'=>$Reference,
            'Price'=>$Price,
            'Weight'=>$Weight,
            'Category'=>$Category,
            'Stock'=>$Stock,
        ];
        $Product->update($id,$Datos);

        //Datos que se envian a la vista para comparar si mostrar o no determinada informacion por el switch case
        $Validacion['valor'] = 2;
        $Validacion['namepro'] = $NameProduct;
        return view('products_functions/information_messages',$Validacion);
    }
}