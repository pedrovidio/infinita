<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lead extends CI_Controller {

    public function __construct(){

    parent::__construct();
    }

    public function index($msg = NULL) {

      $headers['headers'] = ['style', 'form'];
      $this->load->view('slices/header', $headers);
      $this->load->view('components/modal.php');
      $this->load->view('lead/index.php');
      $this->load->view('slices/footer');
    }
  }