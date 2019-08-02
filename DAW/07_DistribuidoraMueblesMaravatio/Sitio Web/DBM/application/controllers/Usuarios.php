<?php 

class Usuarios extends CI_Controller
{
    public function __construct(){

        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index(){
        $data['titulo'] = 'Usuarios';
        $this->load->view('template/navbar',$data);
        try{

            $crud = new grocery_CRUD();

            $crud->set_theme('bootstrap-v4'); //'bootstrap-v4'
            $crud->set_table('usuarios');
            $crud->columns('idUsuarios','nombreUsuarios','apellidos','direccion','provincia_idProvincias','telefono','email','password','privilegios_idPrivilegios','pedidos_idPedidos');
            $crud->required_fields('nombreUsuarios','apellidos','direccion','provincia_idProvincias','telefono','privilegios_idPrivilegios'); //Aqui van los campos obligatorios
            $crud->display_as('nombreUsuarios','Nombre');
            $crud->display_as('provincia_idProvincias','Provincia');
            $crud->display_as('privilegios_idPrivilegios','Privilegios');
            $crud->display_as('pedidos_idPedidos','Pedidos');
            
            
           
             //texto descriptivo, tabla1, tabla 2, foranea, foranea, lo que lleva el combo
          

           


            $crud->set_relation("provincia_idProvincias","provincias","nombreProvincia");
            $crud->set_relation("privilegios_idPrivilegios","privilegios","nombrePrivilegios");
            $crud->set_relation("pedidos_idPedidos","pedidos","idPedidos");



            $output = $crud->render();
            $this->load->view('usuarios.php',(array)$output); // se puede omitir ell ".php" CASTEO
            


        }catch(Exception $ex){
            show_error($ex->getMessage());
        }

      
    }

   /* public function add(){
        $crud = new grocery_CRUD();
        $crud= array(
            'nombreUsuarios' => $this->input->post('nombreUsuarios'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
            
        );

        $crud->add_fields(array ('nombreUsuarios','apellidos','email','password'));
        $output = $crud->render();
            $this->load->view('registrar.php',(array)$output);
        } */
}