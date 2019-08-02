<?php 

class Promociones extends CI_Controller
{
    public function __construct(){

        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index(){
        $data['titulo'] = 'Promociones';
        $this->load->view('template/navbar',$data);
        try{

            $crud = new grocery_CRUD();

            $crud->set_theme('bootstrap-v4'); //'bootstrap-v4'
            $crud->set_table('promociones');
            $crud->columns('idPromociones','nombrePromocion','productos_idProductos','estatus_idEstatus','fecha_inicio','fecha_fin');
            $crud->required_fields('nombrePromocion','productos_idProductos','estatus_idEstatus','fecha_inicio','fecha_fin'); //Aqui van los campos obligatorios
            $crud->display_as('nombrePromocion','Nombre');
            $crud->display_as('productos_idProductos','Productos');
            $crud->display_as('estatus_idEstatus','Estatus');
            $crud->display_as('fecha_inicio','Fecha Inicio');
            $crud->display_as('fecha_fin','Fecha Fin');
            
           
             //texto descriptivo, tabla1, tabla 2, foranea, foranea, lo que lleva el combo
           $crud->set_relation_n_n("Productos","categorias","productos","productos_idProductos","categoria_idCategorias","nombreProducto");

           


            $crud->set_relation("estatus_idEstatus","estatuspromociones","nombreEstatus");
           



            $output = $crud->render();
            $this->load->view('productos.php',(array)$output); // se puede omitir ell ".php" CASTEO


        }catch(Exception $ex){
            show_error($ex->getMessage());
        }
    }
}