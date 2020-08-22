<?php  
	class Index extends CI_Controller
	{
		function __construct() //check if logged
		{
			parent::__construct();
			if (!$this->session->userdata('admin')) {
				redirect('admin');
			}
			$this->load->model('employee_model');
			$this->load->model('Admin');
		}
		public function index($offset = 0)
		{
			$this->load->library('pagination');
			
			$config['base_url'] = site_url('admin/employee/index/index');
			$config['total_rows'] = $this->Admin->countAll(); 
			$config['per_page'] = 5;
			$this->pagination->initialize($config);
			$data['arr'] = $this->Admin->getemp($config['per_page'],$offset);
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidenav');
			$this->load->view('admin/employee/viewEmployees',$data);
			$this->load->view('templates/footer');
		}
		public function open_create()
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('admin/employee/create_emp');
			$this->load->view('templates/footer');
		}
		public function create_emp()
		{
			$data['emp_fname']=$this->input->post('fname');
			$data['emp_mname']=$this->input->post('mname');
			$data['emp_lname']=$this->input->post('lname');
			$data['emp_sex']=$this->input->post('sex');
			$data['emp_email']=$this->input->post('email');
			$data['emp_phone']=$this->input->post('phone');
			$data['emp_address']=$this->input->post('address');
			$data['emp_in']=$this->input->post('timein');
			$data['emp_out']=$this->input->post('timeout');
			$data['emp_password']=md5($this->input->post('pass'));

			$user=$this->Admin->save_emp($data);
			if($user>0){
					$this->session->set_flashdata('success', 'Creating successful');
			        redirect('admin/employee/index');
			}
			else{
					echo "Insert error !";
			}
		}
		public function view_emp_details($id)
		{
			$data['details'] = $this->employee_model->getById($id);
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('admin/employee/view_emp_details', $data);
			$this->load->view('templates/footer');

		}
		public function deactivate_emp($id)
		{

			$this->employee_model->deactivate_emp($id);
			$this->session->set_flashdata('deactivate','Status is set to INACTIVE');
			redirect('admin/employee/index');
		}
		public function activate_emp($id)
		{

			$this->employee_model->activate_emp($id);
			$this->session->set_flashdata('activate','Status is set to ACTIVE');
			redirect('admin/employee/index');
		}
		
	}


?>