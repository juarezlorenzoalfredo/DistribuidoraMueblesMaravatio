<?php 

class Provincias extends CI_Controller
{
    public function __construct(){

        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index(){
        $data['titulo'] = 'Provincias';
        $this->load->view('template/navbar',$data);
        try{

            $crud = new grocery_CRUD();

            $crud->set_theme('bootstrap-v4'); //'bootstrap-v4'
            $crud->set_table('provincias');
            $crud->columns('idProvincias','nombreProvincia');
            $crud->required_fields('nombreProvincia'); //Aqui van los campos obligatorios
            $crud->display_as('nombreProvincia','Nombre');
            $output = $crud->render();
            $this->load->view('provincias.php',(array)$output); // se puede omitir ell ".php" CASTEO


        }catch(Exception $ex){
            show_error($ex->getMessage());
        }
    }
}