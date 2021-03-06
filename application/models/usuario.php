<?php
    class Usuario extends CI_Model {

        function __construct(){
            parent::__construct();
        }

        
        function get($id=null) {
            if($id){
                $this->db->where('id', $id);
                $query = $this->db->get('tbusuario');
                return $query->row_array();
            }else{
                $query = $this->db->get('tbusuario');
                return $query->result_array();
            }
        }
        
        function inserir($postagem) {
            return $this->db->insert('postagem', $postagem);
        }
        function atualizar($postagem) {
            $this->db->where('id', $postagem['id']);
            return $this->db->update('postagem', $postagem);
        }
        function deletar($id) {
            $this->db->where('id', $id);
            return $this->db->delete('postagem');
        }
    }