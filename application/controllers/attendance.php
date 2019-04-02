<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class attendance extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

		
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
        
    public function view_attendance()
	{
        $this->load->view('sections/user/header');
        $this->load->view('sections/user/view_attendance/attendance');
        $this->load->view('sections/user/footer');
	}
    
}
