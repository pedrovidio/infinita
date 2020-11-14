<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
  private $table = 'corretor';
	function __construct()
	{
		parent::__construct();
	}

	public function all() {
		$this->db->select('Corretor_Nome,Corretor_Email, id');
		$this->db->order_by('Corretor_Nome', 'ASC');
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
