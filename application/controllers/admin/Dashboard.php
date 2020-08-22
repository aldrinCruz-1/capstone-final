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
			$this->load->model('admin');
		}
		public function index()
		{

			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidenav');
			$this->load->view('admin/dashboard');
			$this->load->view('templates/footer');
		}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('admin');
		}
		public function view_admin_acc()
		{
		 	$result['details'] = $this->admin->get_admin_details();
		 	$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidenav');
			$this->load->view('admin/account/admin_view', $result);
			$this->load->view('templates/footer');
		}

	}
?>