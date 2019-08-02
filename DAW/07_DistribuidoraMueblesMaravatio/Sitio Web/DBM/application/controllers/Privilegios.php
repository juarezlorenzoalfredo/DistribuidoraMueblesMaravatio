<?php 

class Privilegios extends CI_Controller
{
    public function __construct(){

        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index(){
        $data['titulo'] = 'Privilegios';
        $this->load->view('template/navbar',$data);
        try{

            $crud = new grocery_CRUD();

            $crud->set_theme('bootstrap-v4'); //'bootstrap-v4'
            $crud->set_table('privilegios');
            $crud->columns('idPrivilegios','nombrePrivilegios');
            $crud->required_fields('nombrePrivilegios'); //Aqui van los campos obligatorios

            $output = $crud->render();
            $this->load->view('privilegios.php',(array)$output); // se puede omitir ell ".php" CASTEO


        }catch(Exception $ex){
            show_error($ex->getMessage());
        }
    }
}