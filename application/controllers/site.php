<?php

class Site extends CI_Controller {
	function index(){
		$this->load->model('site_model');
		$data['recs'] = $this->site_model->getAll();
//		$this->load->view('home');
		$this->load->view('home', $data);
	}
	
} // end class Site


