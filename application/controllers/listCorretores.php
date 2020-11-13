<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListCorretores extends CI_Controller {

    public function __construct(){

    parent::__construct();
    $this->load->model('Corretor_model', 'corretor');
    }

    public function index() {
      $corretores = $this->corretor->all();

      $options = "<option></option>";
      foreach($corretores as $id => $corretor){
        $options .= "<option value='".$id."'>$corretor</option>";
      }

      return $corretores;
    }
  }