<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validate extends CI_Controller {

    public function __construct(){

    parent::__construct();
    $this->load->library('session');
    $this->load->model('Login_model', 'login');
  }
  
  public function index() {

    $data = $this->input->post();

    $id = $this->login->valida($data);

    if(!empty($id))
    {
      $dados = array(
        'idLogin'  => $id,
      );
      
      $this->session->set_userdata($dados);
      redirect(base_url("dashboard"));
    }
    redirect(base_url('home/index/error/login'));
  }

    public function sair() {
      $this->session->sess_destroy();
      redirect(base_url('home'));
  }
}