<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{


    public function index(){


        $this->load->model('model_notamaxima');
        $dadospg['contador'] = $this->model_notamaxima->contaQuest();

        $this->load->view('index',$dadospg);

    }

    public function pesquisar(){

        $dados = $this->input->post('pesquisar');

        $this->load->model('model_notamaxima');
        $dadospg['contador'] = $this->model_notamaxima->contaQuest();

        $this->load->model('model_notamaxima');
        $lista = $this->model_notamaxima->listarRespostas($dados);

        if($lista!=null){
            $dadospg['lista'] = $lista;
        }else{
            $dadospg['erro'] = "<p class='bg-danger bs-p text-center'>Nenhuma resultado para pesquisa realizada. Após responder seu questionário cadastre as respostas para que outros possam pesquizar.</p>";
        }

        $this->load->view('index',$dadospg);

    }

    public function cadastrar(){

        if($this->input->post('quest[]')) {

            $dados = $this->input->post('quest[]');

            if ($dados):

                $this->load->model('model_notamaxima');
                $this->model_notamaxima->cadastraRespostas($dados);

                if ($this->db->affected_rows()) {

                    $mens["mensagem"] = "<p class='bg-success bs-p text-center'>Respostas registradas com sucesso! Obrigado.</p>";

                } else {
                    $mens["mensagem"] = "<p class='bg-danger bs-p text-center'>Houve um erro ao cadastrar suas respostas, favor tentar novamente.";
                }

                $mens['contador'] = $this->model_notamaxima->contaQuest();

                $this->load->view('enviar', $mens);

            endif;
        }else{

            $this->load->model('model_notamaxima');
            $dadospg['contador'] = $this->model_notamaxima->contaQuest();

            $this->load->view('enviar',$dadospg);
        };

    }

}