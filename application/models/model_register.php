<?php 

class Model_register extends CI_Model
{

	public function enter_data($data)
	{
		$this->db->insert('alldata', $data);
		redirect('main/success');
	}

	public function can_log_in()
	{
		$this->db->where('email', $this->input->post('lemail'));
		$this->db->where('password', md5($this->input->post('lpass')));
		$query = $this->db->get('alldata');
		//$query_student = $this->db->get('users');
		//$query_staff = $this->db->get('staff');
		if($query->num_rows() == 1){
			return 1;
		}
	}


	public function status()
	{
		$email = $this->session->userdata('email');
		$this->db->where('email', $email);
		$this->db->where('status', 0);
		$query = $this->db->get('alldata');
		if($query->num_rows == 1)
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}

	public function nearby()
	{
		$email = $this->session->userdata('email');
		$query_str = "SELECT `local` FROM `alldata` WHERE `email` = '$email'";
		$query1 = $this->db->query($query_str);
		$query2 = $query1->row_array()['local'];
		$request_str = "SELECT `email`, `local`, `gender` FROM `alldata` WHERE `local` = '$query2' AND `email` != '$email' ";
		$query3 = $this->db->query($request_str);
		if($query3->num_rows != 0)
		{
			return $query3->result();
		}
		else
		{
			return 0;
		}
		
	}

	public function change_status()
	{
		$email = $this->session->userdata('email');
		$this->db->where('email', $email);
		$change = array('status' => 1);
		$this->db->update('alldata', $change);
	}

	public function get_profile()
	{
		$email = $this->session->userdata('email');
		$request_str = "SELECT `email`,`mobile`,`local`,`city`,`state`,`gender` FROM `alldata` WHERE `email` = '$email' ";
		$query = $this->db->query($request_str);
		return $query->result();	
	}

	public function checkmail($gmail)
	{
		$email = $gmail;
		$query_str = "SELECT `email` FROM `alldata` WHERE `email` = '$email' ";
		$query = $this->db->query($query_str);
		if($query->num_rows == 0)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function getid($id)
	{
		$fbid = $id;
		$query_str = "SELECT `fbid` FROM `alldata` WHERE `fbid` = '$fbid' ";
		$query = $this->db->query($query_str);
		if($query->num_rows == 0)
		{
			return 1;
		}
		else
		{
			return 0;
		} 
	}



}