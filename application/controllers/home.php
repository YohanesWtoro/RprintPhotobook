<?php

class Home extends CI_Controller{
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['tema'] = $this->model_tema->tampil_data()->result();
		$this->load->view('templates_home/header');
		$this->load->view('templates_home/sidebar');
		$this->load->view('home', $data );
		$this->load->view('templates_home/footer');
	}

		public function detail_home($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$data['tema'] = $this->model_tema->tampil_data()->result();
			$this->load->view('templates_home/header');
			$this->load->view('templates_home/sidebar');
			$this->load->view('detail_barang_home',$data);
			$this->load->view('templates_home/footer');	

	}

		public function hasil()
	{
		$data['cari'] = $this->model_barang->cari_barang();
		$this->load->view('templates_home/header');
		$this->load->view('templates_home/sidebar');
		$this->load->view('search_home', $data);
		$this->load->view('templates_home/footer');
	}


	public function tentang()
	{
		$this->load->view('templates_home/header');
		$this->load->view('templates_home/sidebar');
		$this->load->view('tentang_kami');
		$this->load->view('templates_home/footer');
	}

		public function tema()
	{
		$data['tema'] = $this->model_tema->tampil_data()->result();
		$this->load->view('templates_home/header');
		$this->load->view('templates_home/sidebar');
		$this->load->view('tampil_tema_home', $data );
		$this->load->view('templates_home/footer');
	}

}