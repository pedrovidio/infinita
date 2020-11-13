<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CorretorCreate extends CI_Controller {

    public function __construct(){

    parent::__construct();
    $this->load->model('Corretor_model', 'corretor');
    }

    public function index() {
      $data = $this->input->post();
      
      $id = $this->corretor->add($data);

      redirect(base_url('home/index/ok/Corretor'));
    }
  }