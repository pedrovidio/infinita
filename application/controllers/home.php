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

      if($action === "error" AND $actor === "login"){
        $msg['msg'] = "Usuário/senha incorreto";
        $msg['class'] = "danger";
      }

      $headers['headers'] = ['style', 'landing','toast'];
      $this->load->view('slices/header', $headers);
      $this->load->view('components/modal_login.php');
      $this->load->view('components/toast.php',$msg);
      $this->load->view('home/index.php');
      $this->load->view('home/footer');
    }
  }