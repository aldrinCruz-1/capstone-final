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
	function countAll()
	{
		return $this->db->get('tbl_emp')->num_rows();
	}
	public function getemp($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('emp_id DESC');
		$data = $this->db->get('tbl_emp');
		return $data;
	}
	public function save_emp($data)
	{
		$this->db->insert('tbl_emp',$data);
          return $this->db->insert_id();
	}
	public function confirmemail($email)
	{
		$arr['email'] = $email;
		return $this->db->get_where('tbl_admins',$arr)->row();  
	}
	public function updatepass($code,$email)
	{
		
        $data = [
            'password' => md5($code),
        ];
        $this->db->where('email', $email);
       return $this->db->update('tbl_admins', $data);

	}
}