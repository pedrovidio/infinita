<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validate extends CI_Controller {

    public function __construct(){

    parent::__construct();
    $this->load->model('Login_model', 'login');
  }
  
  public function index() {

      $data = $this->input->post();
      
      $id = $this->login->valida($data);
      if(!empty($id[0]))
      {
          $this->session->id_login = $id[0]['id'];
          redirect(base_url("dashboard"));
      }
      redirect(base_url('home/index/error/login'));
    }
  }