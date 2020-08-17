<?php  
	/**
	 * 
	 */
	class Employee_model extends CI_Model
	{
		public function getById($id)
		{
			return $this->db->get_where('tbl_emp',array('emp_id'=>$id))->row();
		}
		public function deactivate_emp($id)
		{
			$this->db->where('emp_id', $id);
			$this->db->update('tbl_emp', array('emp_status'=>0));
		}
		public function activate_emp($id)
		{
			$this->db->where('emp_id', $id);
			$this->db->update('tbl_emp', array('emp_status'=>1));
		}
	}


?>