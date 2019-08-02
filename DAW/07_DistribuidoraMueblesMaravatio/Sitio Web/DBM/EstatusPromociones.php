<?php 

class EstatusPromociones extends CI_Controller
{
    public function __construct(){

        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index(){

        $this->load->view('template/navbar');
        try{

            $crud = new grocery_CRUD();

            $crud->set_theme('bootstrap-v4'); //'bootstrap-v4'
            $crud->set_table('estatuspromociones');
            $crud->columns('idEstatus','nombreEstatus');
            $crud->required_fields('nombreEstatus'); //Aqui van los campos obligatorios
            $crud->display_as('nombreEstatus','Nombre');
            $output = $crud->render();
            $this->load->view('estatusPromociones.php',(array)$output); // se puede omitir ell ".php" CASTEO


        }catch(Exception $ex){
            show_error($ex->getMessage());
        }
    }
}