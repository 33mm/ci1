<?php

/**
* 
*/
class Email extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	function index(){
		$this->load->view('newsletter');
	}

	function send() {
		// echo "send meth";
		// die();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('newsletter');
		}
		else{
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from("mm@greeneggmedia.com", "M M");
			$this->email->to("$email");
			$this->email->subject("ci email test");
			$this->email->message("its working");

			$path = $this->config->item('server_root');
			$file = $path . '/ci/ci/assets/email_at/test.txt';

			$this->email->attach($file);

			if($this->email->send()){
				echo "Email sent";
			}
			else{
				show_error($this->email->print_debugger());
			}
		}
	}
}
