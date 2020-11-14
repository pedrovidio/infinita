<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){

      parent::__construct();
      $this->load->library('session');
      $this->load->model('Lead_model','lead');
      $this->load->model('Corretor_model','corretor');

      if(!$this->session->userdata('idLogin')){
        redirect(base_url('home'));
      }
    }

    public function index() {
      $headers['headers'] = ['style', 'search_table'];
      $data['cadastros'] = $this->lead->allTabela();
      $data['colunas'] = array(
        '1' => 'Lead_Nome',
        '2' => 'Lead_Telefone',
        '3' => 'Lead_Email',
        '4' => 'Lead_BairroResid',
        '5' => 'Lead_CidadeResid',
        '6' => 'Lead_BairroComerc',
        '7' => 'Lead_CidadeComerc',
        '8' => 'Autorizacao',
        '9' => 'Corretor_Nome',
        '10' => 'Corretor_Telefone',
        '11' => 'Corretor_Email',
        '12' => 'Corretor_Imobiliaria',
        '13' => 'Corretor_Imobiliaria_Outra',
        '14' => 'dt_cadastro',
      );
      $data['labels'] = array(
        '1' => 'Nome do lead',
        '2' => 'Telefone do lead',
        '3' => 'Email do lead',
        '4' => 'Bairro residencial',
        '5' => 'Cidade residencial',
        '6' => 'Bairro Comercial',
        '7' => 'Cidade Comercial',
        '8' => 'Autorização',
        '9' => 'Nome do corretor',
        '10' => 'Telefone do corretor',
        '11' => 'Email do corretor',
        '12' => 'Imobiliária do corretor',
        '13' => 'Imobiliária do corretor (Outra)',
        '14' => 'Data de cadastro',
      );
      $data['largura'] = array(
        '1' => '150px',
        '2' => '150px',
        '3' => '150px',
        '4' => '150px',
        '5' => '150px',
        '6' => '150px',
        '7' => '150px',
        '8' => '120px',
        '9' => '170px',
        '10' => '170px',
        '11' => '170px',
        '12' => '200px',
        '13' => '250px',
        '14' => '150px'
      );
      $this->load->view('dashboard/header', $headers);
      $this->load->view('dashboard/navbar.php');
      $this->load->view('dashboard/menu.php');
      $this->load->view('dashboard/index.php',$data);
      $this->load->view('dashboard/footer');
    }

    public function corretor() {
      $headers['headers'] = ['style', 'search_table'];
      $data['cadastros'] = $this->corretor->allTabela();
      $data['colunas'] = array(
        '1' => 'Corretor_Nome',
        '2' => 'Corretor_Telefone',
        '3' => 'Corretor_Email',
        '4' => 'Corretor_Imobiliaria',
        '5' => 'Corretor_Imobiliaria_Outra',
        '6' => 'dt_cadastro'
      );
      $data['labels'] = array(
        '1' => 'Nome do corretor',
        '2' => 'Telefone do corretor',
        '3' => 'Email do corretor',
        '4' => 'Imobiliária do corretor',
        '5' => 'Imobiliária do corretor (Outra)',
        '6' => 'Data de cadastro'
      );
      $data['largura'] = array(
        '1' => '180px',
        '2' => '180px',
        '3' => '240px',
        '4' => '200px',
        '5' => '250px',
        '6' => '150px'
      );
      $this->load->view('dashboard/header', $headers);
      $this->load->view('dashboard/navbar.php');
      $this->load->view('dashboard/menu.php');
      $this->load->view('dashboard/index.php',$data);
      $this->load->view('dashboard/footer');
    }
  }