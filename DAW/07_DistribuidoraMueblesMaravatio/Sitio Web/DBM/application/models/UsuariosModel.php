<?php 

    class UsuariosModel extends CI_Model{
        private $idUsuarios;
        private $nombreUsuarios;
        private $apellidos;
        private $direccion;
        private $provincia_idProvincias;
        private $telefono;
        private $email;
        private $password;
        private $privilegios_idPrivilegios;
        private $pedidos_idPedidos;
      
        

        function __construct(){
            parent::__construct();
        }

        public function getIdUsuarios(){
            return $this->idUsuarios;
        }

        public function getNombreUsuarios(){
            return $this->nombreUsuarios;
        }

        public function getApellidos(){
            return $this->apellidos;
        }

        public function getDireccion(){
            return $this->direccion;
        }
       
        public function getProvincia_idProvincias(){
            return $this->provincia_idProvincias;
        }

        public function getTelefono(){
            return $this->telefono;
        }


        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getPrivilegios_idPrivilegios(){
            return $this->privilegios_idPrivilegios;
        }

        public function getPedidos_idPedidos(){
            return $this->pedidos_idPedidos;
        }

       



        public function setIdUsuarios($idUsuarios){
            $this->idUsuarios = $idUsuarios;
        }

        public function setNombreUsuarios($nombreUsuarios){
            $this->nombreUsuarios = $nombreUsuarios;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        public function setProvincia_idProvincias($provincia_idProvincias){
            $this->provincia_idProvincias = $provincia_idProvincias;
        }

        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }

       
        public function setEmail($email){
            $this->email = $email;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function setPrivilegios_idPrivilegios($privilegios_idPrivilegios){
            $this->privilegios_idPrivilegios = $privilegios_idPrivilegios;
        }

        public function setPedidos_idPedidos($pedidos_idPedidos){
            $this->pedidos_idPedidos = $pedidos_idPedidos;
        }

        
        public function getUser($email = '')
        {
            //$result = $this->db->query("SELECT * FROM usuarios WHERE email = '" . $email . "' LIMIT 1");
    
            $result = $this->db->query("SELECT * FROM usuarios WHERE  email = '" . $email . "' LIMIT 1");
    
            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return null;
            }
    
            }

            public function todosUsuarios($correo)
            {

                $sql = $this->db->where('email', $correo);
                $sql = $this->db->get('usuarios');
               
                return $sql->result_array();
            }

            public function pedidos($id)
            {

                $sql = $this->db->where('usuario_idUsuarios', $id);
                $sql = $this->db->get('pedidos');
               
                return $sql->result_array();
            }
           
        public function guardar(){
           
            $g=array(
                'nombreUsuarios'=>$this->nombreUsuarios,
                'apellidos'=>$this->apellidos,
                'direccion'=>$this->direccion,
                'provincia_idProvincias'=>$this->provincia_idProvincias,
                'telefono'=>$this->telefono,
                'email'=>$this->email,
                'password'=>$this->password,
                'privilegios_idPrivilegios'=>3);
                
            $this->db->insert('usuarios', $g); 
          
        }

        public function actusu(){
           
            $g=array(
                'nombreUsuarios'=>$this->nombreUsuarios,
                'apellidos'=>$this->apellidos,
                'direccion'=>$this->direccion,
                'provincia_idProvincias'=>$this->provincia_idProvincias,
                'telefono'=>$this->telefono,
                'email'=>$this->email,
                'password'=>$this->password,
                'privilegios_idPrivilegios'=>3);

                $this->db->where('idUsuarios', $this->idUsuarios);
                $this->db->update('usuarios', $g); 
                
           
          
        }

     public function insert_customer($data)
                {
                $this->db->insert('pedidos', $data);
                $id = $this->db->insert_id();
               
                } 


        
           


        

        

     
     }