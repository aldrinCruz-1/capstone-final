<?php  
	/**
	 * 
	 */
	class Dashboard extends CI_Controller
	{
		function __construct() // check if logged
		{
			parent::__construct();
			if (!$this->session->userdata('admin')) {
				redirect('admin');
			}
		}
		function index()
		{
			$this->load->view('admin/dashboard');
		}
		function logout()
		{
			$this->session->session_destroy();
			redirect('admin');
		}
	}
?>