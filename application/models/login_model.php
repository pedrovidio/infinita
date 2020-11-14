<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
  private $table = 'user';
	function __construct()
	{
		parent::__construct();
	}

	public function valida($data) {
		$this->db->select('id');
		$this->db->where($data);
		$data = $this->db->get($this->table)->result_array();
		return $data;
  }
}
