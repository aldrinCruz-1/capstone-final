<?php  
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		function __construct() // check if logged
		{
			parent::__construct();
			if ($this->session->userdata('admin')) {
				redirect('admin/dashboard');
			}
		}
		function index()
		{
			$this->load->view('templates/header');
			$this->load->view('admin/login');
			$this->load->view('templates/footer');
		}
		function verify()
		{
			$this->load->model('admin'); //admin is from model Admin.php 
			$check = $this->admin->validate();
			
			if($check)
			{
				$result = $this->admin->showname($_POST['username']);
				$this->session->set_userdata('admin', $result);

				redirect('admin/dashboard');
			}
			else
			{
				redirect('admin'); //redirect to admin/login/index as per in the route
			}
		}
	}
?>