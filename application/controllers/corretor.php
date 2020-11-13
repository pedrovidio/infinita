<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Corretor extends CI_Controller {

    public function __construct(){

    parent::__construct();
    }

    public function index() {

      $headers['headers'] = ['style', 'form'];
      $this->load->view('slices/header', $headers);
      $this->load->view('corretor/index.php');
      $this->load->view('slices/footer');
    }
  }