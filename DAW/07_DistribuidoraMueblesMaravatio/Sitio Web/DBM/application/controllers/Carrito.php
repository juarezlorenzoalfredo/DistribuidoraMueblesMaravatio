<?php

class Carrito extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart'); 
        $this->load->model('Carrito_model'); 
        $this->load->model('UsuariosModel');
    }

    public function index()
    {
        //Aqui se resive en la variable $data el objeto o clase
        $data['titulo'] = 'Carrito';
        $data['products'] = $this->Carrito_model->get_all();
        $this->load->view('template/header',$data);
        $this->load->view('carrito_view', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $insert_data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'qty' => 1,
            'img' => $this->input->post('img'),
        );

        $this->cart->insert($insert_data);
        redirect('carrito');
    }

    function remove($rowid) 
    {
        if ($rowid==="all"){
        $this->cart->destroy();
        }else{
        $data = array(
        'rowid' => $rowid,
        'qty' => 0
        );
        $this->cart->update($data);
        }

        redirect('carrito');
    }

    function update_cart()
    {

        $cart_info = $_POST['cart'];
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];

            $data = array(
            'rowid' => $rowid,
            'price' => $price,
            'amount' => $amount,
            'qty' => $qty
            );

            $this->cart->update($data);
        }
        redirect('carrito');
    }

    //VISTA DEL FORMULARIO DE COMPRA 
    function billing_view(){
        // Load "billing_view".
        $data['titulo'] = 'Compra';
        $data['usua'] = $this->UsuariosModel->todosUsuarios($this->session->userdata('email'));
        $this->load->view('template/header', $data);
        $this->load->view('billing_view', $data);
        $this->load->view('template/footer', $data);

        
        }


        public function save_order()
{

// This will store all values which inserted from user.
$customer = array(
'productos_idProductos' => $this->input->post('pro'),
'usuario_idUsuarios' => $this->input->post('id')
//'direccion' => $this->input->post('address'),
//'provincia_idProvincias' => $this->input->post('province'),
//'telefono' => $this->input->post('phone')
//'email' => $this->input->post('email'),


);
$this->UsuariosModel->insert_customer($customer);
redirect('welcome?info=6');

}






}
?>
