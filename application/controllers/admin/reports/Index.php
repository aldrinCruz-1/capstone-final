<?php
	/**
	 * 
	 */
	class Index extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!$this->session->userdata('admin')) {
				redirect('admin');
			}
			$this->load->model('admin');
		}
		public function index()
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidenav');
			$this->load->view('admin/reports/index');
			$this->load->view('templates/footer');
		}
	}