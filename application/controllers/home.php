<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){

    parent::__construct();
    }

    public function index() {
      $action = $this->uri->segment(3);
      $actor = $this->uri->segment(4);

      if($action === "ok"){
        $msg['msg'] = "{$actor} cadastro com sucesso!";
        $msg['class'] = "success";
      }

      $headers['headers'] = ['style', 'landing','toast'];
      $this->load->view('slices/header', $headers);
      $this->load->view('components/modal.php');
      $this->load->view('components/toast.php',$msg);
      $this->load->view('home/index.php');
      $this->load->view('slices/footer');
    }
  }