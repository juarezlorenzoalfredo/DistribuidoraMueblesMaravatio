<?php 

class Establecimientos extends CI_Controller
{
    public function __construct(){

        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index(){
        $data['titulo'] = 'Establecimientos';
        $this->load->view('template/navbar',$data);
        try{

            $crud = new grocery_CRUD();

            $crud->set_theme('bootstrap-v4'); //'bootstrap-v4'
            $crud->set_table('establecimientos');
            $crud->columns('idEstablecimientos','nombreEstablecimiento');
            $crud->required_fields('nombreEstablecimiento'); //Aqui van los campos obligatorios
            $crud->display_as('nombreEstablecimiento','Nombre');
            $output = $crud->render();
            $this->load->view('establecimientos.php',(array)$output); // se puede omitir ell ".php" CASTEO


        }catch(Exception $ex){
            show_error($ex->getMessage());
        }
    }
}