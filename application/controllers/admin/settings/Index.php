<?php 
	/**
	 * 
	 */
	class Index extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!$this->session->userdata('admin')) 
				redirect('admin');
			
		}
		public function index()
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidenav');
			$this->load->view('admin/settings/index');
			$this->load->view('templates/footer');
		}
	}