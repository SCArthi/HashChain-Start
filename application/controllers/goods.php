<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class goods extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

		
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
        
    public function finished_good()
		{
					$this->load->view('sections/user/header');
					$this->load->view('sections/user/finished_good/enter_finished_good');
					$this->load->view('sections/user/finished_good/footer');
		}

	public function view_final_good()
		{
					$this->load->view('sections/user/header');
					$this->load->view('sections/user/view_final_good/view_final_good');
					$this->load->view('sections/user/footer');
		}
    
}
