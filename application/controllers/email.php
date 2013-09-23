<?php

/**
* 
*/
class Email extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	function index()
	{

		$this->load->library('email');
		$this->email->set_newline("\r\n");

		$this->email->from("mm@greeneggmedia.com", "M M");
		$this->email->to("mm@greeneggmedia.com");
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
