<?php 

class Proveedores extends CI_Controller
{
    public function __construct(){

        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function index(){
        $data['titulo'] = 'Proveedores';
        $this->load->view('template/navbar',$data);
        try{

            $crud = new grocery_CRUD();

            $crud->set_theme('bootstrap-v4'); //'bootstrap-v4'
            $crud->set_table('proveedores');//Cambiar nombre de la tabla
            $crud->columns('idProveedores','nombreProveedor','direccion','telefono','provincia_idProvincias','establecimiento_idEstablecimientos');
            $crud->required_fields('nombreProveedor','direccion','telefono','provincia_idProvincias','establecimiento_idEstablecimientos');
            $crud->display_as('nombreProveedor','Nombre');
            $crud->display_as('provincia_idProvincia','Provincia'); //Aqui se establece un alias
            $crud->display_as('establecimiento_idEstablecimientos','Establecimiento');

            // $alumno->set_relation(FK,tabla referenciada, campo a mostrar)
           $crud->set_relation("provincia_idProvincias","provincias","nombreProvincia");
           $crud->set_relation("establecimiento_idEstablecimientos","establecimientos","nombreEstablecimiento");
          
           // $crud->display_as('idPrivilegios','privilegios'); //Aqui se establece el alias del combo box

           


           
            $output = $crud->render();
            $this->load->view('proveedores.php',(array)$output); // se puede omitir ell ".php" CASTEO


        }catch(Exception $ex){
            show_error($ex->getMessage());
        }
    }
}