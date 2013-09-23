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
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => '465',
			'smtp_user' => 'mm@greeneggmedia.com',
			'smtp_pass' => 'Love4life',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
		);

		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");

		$this->email->from("mm@greeneggmedia.com", "M M");
		$this->email->to("mm@greeneggmedia.com");
		$this->email->subject("ci email test");
		$this->email->message("its working");

		if($this->email->send()){
			echo "Email sent";
		}
		else{
			show_error($this->email->print_debugger());
		}


	}


}
