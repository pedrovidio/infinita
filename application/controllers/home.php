<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){

    parent::__construct();
    }

    public function index($msg = NULL) {

      $headers['headers'] = ['style'];
      $footer['footer'] = [];
      $this->load->view('slices/header', $headers);
      $this->load->view('home/index.php');
      $this->load->view('slices/footer');
    }
  }