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
	}


?>