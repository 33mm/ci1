<?php

class Site_model extends CI_Model {

	function getAll(){
		$q = $this->db->get('recs');
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;	
			}
			return $data;
		}
	} // end function getAll

	function add_rec($rec) {
		$this->db->insert('data', $rec)
		return;
	}

	function del_rec($rec) {
		$this->db->insert('data', $rec)
		return;
	}

	function upd_rec($rec) {
		$this->db->insert('data', $rec)
		return;
	}	
	
} // end class Site_model



