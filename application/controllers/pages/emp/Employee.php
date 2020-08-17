<?php  
	/**
	 * 
	 */
	class Employee extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			if (!$this->session->userdata('admin')) {
				redirect('admin');
			}
			$this->load->model('employee_model');
		}
		public function view_emp_details($id)
		{
			$data['details'] = $this->employee_model->getById($id);
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('pages/emp/view_emp_details', $data);
			$this->load->view('templates/footer');

		}
		public function deactivate_emp($id)
		{

			$this->employee_model->deactivate_emp($id);
			$this->session->set_flashdata('deactivate','Status changed to INACTIVE');
			redirect('pages/employee/get_emp');
		}
		public function activate_emp($id)
		{

			$this->employee_model->activate_emp($id);
			$this->session->set_flashdata('activate','Status changed to ACTIVE');
			redirect('pages/employee/get_emp');
		}




	}


?>