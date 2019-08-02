<?php 

class Categorias extends CI_Controller
{
    public function __construct(){

        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index(){
        $data['titulo'] = 'Categorias';
        $this->load->view('template/navbar',$data);

        try{

            $crud = new grocery_CRUD();

            $crud->set_theme('bootstrap-v4'); //'bootstrap-v4'
            $crud->set_table('categorias');
            $crud->columns('idCategorias','nombreCategoria');
            $crud->required_fields('nombreCategoria'); //Aqui van los campos obligatorios
            $crud->display_as('nombreCategoria','Nombre');
            $output = $crud->render();
            $this->load->view('categorias.php',(array)$output); // se puede omitir ell ".php" CASTEO


        }catch(Exception $ex){
            show_error($ex->getMessage());
        }
    }
}