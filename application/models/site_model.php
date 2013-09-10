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
	
} // end class Site_model



