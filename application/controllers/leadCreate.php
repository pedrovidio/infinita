<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LeadCreate extends CI_Controller {

    public function __construct(){

    parent::__construct();
    $this->load->model('Lead_model', 'lead');
    }

    public function index() {
      $data = $this->input->post();
      
      $this->lead->add($data);

      redirect(base_url('home/index/ok/Lead'));
    }
  }