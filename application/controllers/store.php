<?php

class Store extends CI_Controller {
	function index(){
		$this->load->model('site_model');
	 	$data['recs'] = $this->site_model->getAll();
		$this->load->view('1store');
//		$this->load->view('1store', $data);
	}
	
} // end class Site