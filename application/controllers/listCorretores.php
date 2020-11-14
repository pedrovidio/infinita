<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListCorretores extends CI_Controller {

    public function __construct(){

    parent::__construct();
    $this->load->model('Corretor_model', 'corretor');
    }

    public function index() {
      $Corretor_Nome = $this->input->post('Corretor_Nome');
      $Corretor_Email = $this->input->post('Corretor_Email');

      $corretores = $this->corretor->all();

      $options = "<option class='corretor'></option>";
      foreach($corretores as $id => $corretor){
        if ($corretor['Corretor_Nome'] == $Corretor_Nome AND $corretor['Corretor_Email'] == $Corretor_Email) {
          $options .= "<option class='corretor' value='".$corretor['id']."' selected>".$corretor['Corretor_Nome']."</option>";
        }
        else{
          $options .= "<option class='corretor' value='".$corretor['id']."'>".$corretor['Corretor_Nome']."</option>";
        }
      }

      echo $options;
    }
  }