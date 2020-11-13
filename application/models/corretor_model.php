<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corretor_model extends CI_Model {
  private $table = 'corretor';
	function __construct()
	{
		parent::__construct();
	}

	public function all($data) {
		$this->db->select('Corretor_Nome, id');
		$data = $this->db->get($this->table)->result_array();
		return $data;
		
		
		$this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

	public function add($data) {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }
  
  public function delete($id, $data) {
    $this->db->where('id', $id);
		return $this->db->delete($this->table);
	}

	public function update($id, $data) {
		$this->db->where('id',$id);
		return $this->db->update($this->table, $data);
	}
}
