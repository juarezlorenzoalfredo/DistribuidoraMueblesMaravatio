<?php
    class Login extends CI_Controller{
        

        public function indexLog(){
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            //$privilegios_idPrivilegios = $this->input->post('privilegios_idPrivilegios');
            

            $this->load->model('UsuariosModel');
            $fila = $this->UsuariosModel->getUser($email);
          

            $chino = $fila->privilegios_idPrivilegios;
            $crt = $fila->idUsuarios;

           // echo $crt;
           // die();


            if($fila != null){
                if($fila->password == $password){
                    $data = array(
                        'email' => $email,
                        'id'=>  $crt,
                        'privilegios' => $fila->privilegios_idPrivilegios,
                        'login' => true
                    );
                    $this->session->set_userdata($data);

                   
                    if($chino == 3 ){
                        redirect('welcome/index');
                    }
                     

                    redirect('categorias');
                    
                }else{
                    header("Location: " . base_url());
                }
            }else{
                redirect('welcome/login?info=3');
            }
        }

        public function logout($value='')
        {
            $this->session->sess_destroy();
            //redirect('welcome/index');
            redirect('welcome/index?info=2');

           
        }
    }
