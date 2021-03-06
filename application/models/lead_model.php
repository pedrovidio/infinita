<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends CI_Model {
  private $table = 'lead';
	function __construct()
	{
		parent::__construct();
	}

	public function allTabela() {
		$this->db->select('*');
		$this->db->join('corretor', 'corretor.id = lead.id_corretor');
		$data = $this->db->get($this->table)->result_array();
		return $data;
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
