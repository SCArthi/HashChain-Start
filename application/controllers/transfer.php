<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transfer extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

		
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
        
    public function transfer()
	{
				$this->load->view('sections/user/header');
        $this->load->view('sections/user/transfer/transfer');
        $this->load->view('sections/user/transfer/footer');
        $this->load->view('sections/user/footer');
	}
    
}
