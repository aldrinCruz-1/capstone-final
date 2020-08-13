<?php

class Admin extends CI_model
{
	
	function validate()//tp check if the login info exist in the database
	{
		$arr['username'] = $this->input->post('username');
		$arr['password'] = md5($this->input->post('password'));
		//row() single entry result() multiple entry
		return $this->db->get_where('tbl_admins',$arr)->row();  
	}
	public function showname($username)
	{
		$this->db->select('firstname , lastname');
		$this->db->where("username", $username);
		$this->db->limit(1);
		$query = $this->db->get('tbl_admins');
		$fname = $query->row()->firstname;
		$lname = $query->row()->lastname;
		//$name =  $fname . $lname;
		return $fname ." ". $lname;;
	}
	public function getemp()
	{
		$this->load->database();
		$data = $this->db->get('tbl_emp');
		return $data;
	}
}