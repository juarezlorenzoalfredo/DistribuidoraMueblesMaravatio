<?php 

class Pedidos extends CI_Controller
{
    public function __construct(){

        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index(){
        $data['titulo'] = 'Pedidos';
        $this->load->view('template/navbar',$data);
        
        try{

            $crud = new grocery_CRUD();

            $crud->set_theme('bootstrap-v4'); //'bootstrap-v4'
            $crud->set_table('pedidos');//Cambiar nombre de la tabla
            $crud->columns('idPedidos','productos_idProductos','usuario_idUsuarios');
            $crud->required_fields('productos_idProductos','usuario_idUsuarios');
            $crud->display_as('productos_idProductos','Productos'); //Aqui se establece un alias
            $crud->display_as('usuario_idUsuarios','Usuario'); //Aqui se establece un alias
           

            // $alumno->set_relation(FK,tabla referenciada, campo a mostrar)
          $crud->set_relation_n_n("Productos","usuarios","productos","productos_idProductos","usuarios_idUsuarios","nombreProducto");
           $crud->set_relation("usuario_idUsuarios","usuarios","nombreUsuarios");
          
           
             //texto descriptivo, tabla1, tabla 2, foranea, foranea, lo que lleva el combo
            

           


           
            $output = $crud->render();
            $this->load->view('pedidos.php',(array)$output); // se puede omitir ell ".php" CASTEO


        }catch(Exception $ex){
            show_error($ex->getMessage());
        }
    }
}