<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){

      parent::__construct();
      $this->load->library('session');

      if(!$this->session->userdata('idLogin')){
        redirect(base_url('home'));
      }
    }

    public function index() {
      $headers['headers'] = ['style'];
      $this->load->view('slices/header', $headers);
      $this->load->view('dashboard/index.php');
      $this->load->view('dashboard/footer');
    }
  }