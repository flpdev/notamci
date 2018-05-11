<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_notamaxima extends CI_Model{

    public function listarRespostas($dados=null){

        $this->db->like('texto_resposta',$dados);
        $query = $this->db->get('respostas');
        return $query->result_array();

    }

    public function contaQuest(){

        $sql = "SELECT COUNT(id_reposta) AS cont FROM respostas;";
        $query = $this->db->query($sql);
        return $query->row();

    }

    public function cadastraRespostas($dados){


        if ($dados != NULL):

            for ($i = 0; $i <= sizeof($dados) - 1 ; $i++) {
                if (!$this->validaExiste($dados[$i])):

                    $insert = "INSERT INTO respostas (texto_resposta) VALUES ('$dados[$i]');";
                    $this->db->query($insert);

                endif;

            }

            return $this->db->affected_rows();

        endif;
    }

    public function validaExiste($dados){

        $this->db->where('texto_resposta',$dados);
        $query = $this->db->get('respostas');
        return $query->row();


    }


}