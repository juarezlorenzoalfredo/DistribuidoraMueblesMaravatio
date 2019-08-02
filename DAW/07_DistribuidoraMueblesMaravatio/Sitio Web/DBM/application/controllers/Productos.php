<?php 

class Productos extends CI_Controller
{
    public function __construct(){

        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index(){
        $data['titulo'] = 'Productos';
        $this->load->view('template/navbar',$data);
        try{

            $crud = new grocery_CRUD();

            $crud->set_theme('bootstrap-v4'); //'bootstrap-v4'
            $crud->set_table('productos');
            $crud->columns('idProductos','nombreProducto','url','precio','descripcion','categoria_idCategorias','proveedor_idProveedores','promocion_idPromociones');
            $crud->required_fields('nombreProducto','url','precio','descripcion','categoria_idCategorias','proveedor_idProveedores'); //Aqui van los campos obligatorios
            $crud->display_as('nombreCategoria','Nombre');
            $crud->display_as('url','Imagen');
            $crud->display_as('categoria_idCategorias','Categoria');
            $crud->display_as('proveedor_idProveedores','Proveedor');
            $crud->display_as('promocion_idPromociones','Promocion');
            $crud->set_field_upload('url','assets/uploads/files','jpg|jpeg|png');

            $crud->set_relation("categoria_idCategorias","categorias","nombreCategoria");
            $crud->set_relation("proveedor_idProveedores","proveedores","nombreProveedor");
            $crud->set_relation("promocion_idPromociones","promociones","nombrePromocion");



            $output = $crud->render();
            
            $this->load->view('productos.php',(array)$output); // se puede omitir ell ".php" CASTEO


        }catch(Exception $ex){
            show_error($ex->getMessage().'---'.$ex->getTraceAsString());
        }
    }
}