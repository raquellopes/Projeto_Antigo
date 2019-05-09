<?php
    class Usuario extends CI_Model {

        function __construct(){
            parent::__construct();
        }


// livro excluir, livro novo, livro salvar, livro listar // 

   		function get($id=null) {
            if($id){
                $this->db->where('id', $id);
                $query = $this->db->get('tblivro');
                return $query->row_array();
            }else{
                $query = $this->db->get('tblivro');
                return $query->result_array();
            }
        }
      
        function novo($postagem) {
            $this->db->where('id', $postagem['id']);
            return $this->db->update('postagem', $postagem);
        }

        function excluir($postagem) {
            return $this->db->insert('postagem', $postagem);
        }


        function salvar($id) {
            $this->db->where('id', $id);
            return $this->db->delete('postagem');
        }

  		function listar($id) {
            $this->db->where('id', $id);
            return $this->db->delete('postagem');
        }
    }