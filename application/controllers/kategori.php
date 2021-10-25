<?php

class Kategori extends CI_Controller{
	public function photobook()
	{
		$data['photobook'] = $this->model_kategori->photobook()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('photobook', $data);
		$this->load->view('templates/footer');
	}

		public function photobook_home()
	{
		$data['photobook'] = $this->model_kategori->photobook()->result();
		$this->load->view('templates_home/header');
		$this->load->view('templates_home/sidebar');
		$this->load->view('photobook_home', $data);
		$this->load->view('templates_home/footer');
	}

}