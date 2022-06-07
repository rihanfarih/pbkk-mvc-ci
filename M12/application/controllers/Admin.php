<?php

class Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}

	public function login()
	{
        // load view admin/overview.php
		
        $this->load->view("admin/login");
	}

	public function myError(){
		// load view admin/404.php
    	$this->load->view('admin/404');
	}

}