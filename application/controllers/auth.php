<?php

class Auth extends CI_Controller{

	public function login()
	{
		$this->form_validation->set_rules('username','Username','required',['required'=>'Username wajib diisi!']);
		$this->form_validation->set_rules('password','Password','required',['required'=>'Password wajib diisi!']);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('form_login');
			$this->load->view('templates/footer');
		}else{
			$auth = $this->model_auth->cek_login();

			if($auth == false)
			{
				$this->session->set_flashdata('Pesan',
					'<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  Username atau Password anda salah!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					   <span aria-hidden="true">&times;</span>
					  </button>
					</div>');

				redirect('auth/login');
			}else{
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('roll_id',$auth->roll_id);

				switch($auth->roll_id){
					case 1 : redirect('admin/dashboard_admin');
							 break;
					case 2 : redirect('dashboard/index');
							 break;

					default: break;
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}