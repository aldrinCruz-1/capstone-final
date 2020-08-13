<?php
class Employee extends CI_Controller
{
	
	public function get_emp()
	{
		$this->load->model('Admin');
		$data['arr'] = $this->Admin->getemp();
		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('pages/viewEmployees',$data);
		$this->load->view('templates/footer');
	}
}