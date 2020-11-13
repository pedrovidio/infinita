<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListCorretores extends CI_Controller {

    public function __construct(){

    parent::__construct();
    $this->load->model('Corretor_model', 'corretor');
    }

    public function index() {
      $corretores = $this->corretor->all();

      $options = "<option class='corretor'></option>";
      foreach($corretores as $id => $corretor){
        $options .= "<option class='corretor' value='".$corretor['id']."'>".$corretor['Corretor_Nome']."</option>";
      }

      echo $options;
    }
  }