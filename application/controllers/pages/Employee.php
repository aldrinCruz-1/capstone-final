<?php
class Employee extends CI_Controller
{
	function __construct() // check if logged
		{
			parent::__construct();
			if (!$this->session->userdata('admin')) {
				redirect('admin');
			}
			$this->load->model('Admin');
		}
	public function get_emp()
	{
		
		$data['arr'] = $this->Admin->getemp();
		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('pages/viewEmployees',$data);
		$this->load->view('templates/footer');
	}
	public function open_create()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('pages/create_emp');
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
				$this->session->set_flashdata('success', 'Creating employee info successful');
		        redirect('pages/employee/get_emp');
		}
		else{
				echo "Insert error !";
		}
	}

	
}