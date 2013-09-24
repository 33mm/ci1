<?php

class Site extends CI_Controller {
	function index(){
		$this->load->model('site_model');
		$data['recs'] = $this->site_model->getAll();
//		$this->load->view('home');
		$this->load->view('home', $data);
	}
	
	function store1(){
		// $this->load->model('site_model');
		// $data['recs'] = $this->site_model->getAll();
		$this->load->view('1store');

	}
	
	function store2(){
		// $this->load->model('site_model');
		// $data['recs'] = $this->site_model->getAll();
		$this->load->view('2store');

	}
	
} // end class Site


