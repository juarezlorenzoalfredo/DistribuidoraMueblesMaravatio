<?php

class Carrito_model extends CI_Model
{
    public function get_all()
    {
        $sql = $this->db->get('productos');
        return $sql->result_array();
    }


    //CATEGORIAS CATEGORIAS CATEGORIAS
    
    public function comedores()
    {
        $sql = $this->db->where('categoria_idCategorias', 4);
        $sql = $this->db->get( 'productos' );

        return $sql->result_array();
    }


    public function cocina()
    {
        $sql = $this->db->where('categoria_idCategorias', 3);
        $sql = $this->db->get( 'productos' );

        return $sql->result_array();
    }

    public function oficina()
    {
        $sql = $this->db->where('categoria_idCategorias', 5);
        $sql = $this->db->get( 'productos' );

        return $sql->result_array();
    }

    public function recamaras()
    {
        $sql = $this->db->where('categoria_idCategorias', 1);
        $sql = $this->db->get( 'productos' );

        return $sql->result_array();
    }

    public function salas()
    {
        $sql = $this->db->where('categoria_idCategorias', 2);
        $sql = $this->db->get( 'productos' );

        return $sql->result_array();
    }

    public function basesCama()
    {
        $sql = $this->db->where('categoria_idCategorias', 6);
        $sql = $this->db->get( 'productos' );

        return $sql->result_array();
    }

    public function buros()
    {
        $sql = $this->db->where('categoria_idCategorias', 7);
        $sql = $this->db->get( 'productos' );

        return $sql->result_array();
    }

    public function cabeceras()
    {
        $sql = $this->db->where('categoria_idCategorias', 8);
        $sql = $this->db->get( 'productos' );

        return $sql->result_array();

        
    }

    public function comodas()
    {
        $sql = $this->db->where('categoria_idCategorias', 9);
        $sql = $this->db->get( 'productos' );

        return $sql->result_array();
    }

    public function libreros()
    {
        $sql = $this->db->where('categoria_idCategorias', 10);
        $sql = $this->db->get( 'productos' );

        return $sql->result_array();
    }
}