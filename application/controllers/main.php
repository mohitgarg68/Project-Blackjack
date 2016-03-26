<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('main-page');
	}


	public function register()
	{
		$this->load->view('register-page');
	}

	public function input_data()
	{
		$hobby = $this->input->post('ihobby');
		$hobbies = implode(",", $hobby);
		$data = array(
			'email' => $this->input->post('iemail'),
			'password' => md5($this->input->post('ipass')),
			'mobile' => $this->input->post('imobile'),
			'local' => $this->input->post('ilocal'),
			'city' => $this->input->post('icity'),
			'state' => $this->input->post('istate'),
			'gender' => $this->input->post('igender'),
			'hobby' => $hobbies
			);

		$this->load->model('model_register');
		$this->model_register->enter_data($data);

	}

	public function input_data_g()
	{
		$hobby = $this->input->post('fhobby');
		$hobbies = implode(",", $hobby);
		$data = array(
			'email' => $this->session->userdata('email'),
			'password' => md5($this->input->post('gpass')),
			'mobile' => $this->input->post('gmobile'),
			'local' => $this->input->post('glocal'),
			'city' => $this->input->post('gcity'),
			'state' => $this->input->post('gstate'),
			'gender' => $this->session->userdata('gender'),
			'hobby' => $hobbies
			);
		$this->load->model('model_register');
		$this->model_register->enter_data($data);
	}

	public function input_data_f()
	{
		$hobby = $this->input->post('fhobby');
		$hobbies = implode(",", $hobby);
		$data = array(
			'email' => $this->input->post('femail'),
			'password' => md5($this->input->post('fpass')),
			'mobile' => $this->input->post('fmobile'),
			'local' => $this->input->post('flocal'),
			'city' => $this->input->post('fcity'),
			'state' => $this->input->post('fstate'),
			'gender' => $this->input->post('fgender'),
			'hobby' => $hobbies,
			'fbid' => $this->session->userdata('fbid')
			);
		$this->load->model('model_register');
		$this->model_register->enter_data($data);	
	}

	public function normal_login()
	{
		$this->load->view('login-page');
	}

	public function login_data()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('lemail', 'Email', 'required|trim|xss_clean');
		$this->form_validation->set_rules('lpass', 'Password', 'required|md5|trim||callback_validate_credentials');

		if($this->form_validation->run() == TRUE && $this->session->userdata('log_status') == 1)
		{
			
			redirect('main/members');
		}

		else
		{
			redirect('main/failure');
		}



	}

	public function validate_credentials()
	{
		$this->load->model('model_register');

		if($this->model_register->can_log_in() == 1){
			//$setemail = array('email' => 'student');
			//$this->session->set_userdata($setuser);
			$setsession = array('email' => $this->input->post('lemail') , 'log_status' => 1);
			$this->session->set_userdata($setsession);
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function failure()
	{
		$this->load->view('fail-page');
	}

	public function members()
	{
		$this->load->model('model_register');
		
		if($this->model_register->status() == 0)
		{
			$this->model_register->change_status();
			$users = $this->model_register->nearby();
			if($users != 0)
			{
				$stun = array( 'start' => $users );
				$this->load->view('first-login', $stun);
			}
			else
			{
				redirect('main/profile');
			}
			

		}

		elseif($this->model_register->status() == 1)
		{
			redirect('main/profile');
		}
	}

	public function profile()
	{
		if($this->session->userdata('log_status') == 1)
		{
			$this->load->model('model_register');
			$mydata = $this->model_register->get_profile();
			$plum = array( 'cone' => $mydata );
			$this->load->view('view-profile', $plum);
		}
		
	}

	public function success()
	{
		$this->load->view('success-page');
	}

	public function flogin()
	{
		redirect('welcome/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('main/index');
	}

	public function fregister()
	{
		$id = $this->session->userdata('fbid');
		$this->load->model('model_register');
		$value = $this->model_register->getid($id);
		if($value == 1)
		{
			$this->load->view('fregister');
		}
		else
		{
			$this->load->view('success-page');
		}
	}

	public function gregister()
	{
		$gmail = $this->session->userdata('email');
		$this->load->model('model_register');
		$value = $this->model_register->checkmail($gmail);
		if($value == 1)
		{
			$this->load->view('gregister');
		}
		else
		{
			$this->load->view('success-page');
		}

	}


}
