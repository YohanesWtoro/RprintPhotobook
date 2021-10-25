<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
	parent::__construct();

	if($this->session->userdata('roll_id') != '2'){
		$this->session->set_flashdata('Pesan',
					'<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  Anda Belum Login
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					   <span aria-hidden="true">&times;</span>
					  </button>
					</div>');

		redirect('auth/login');
		}
	}	

	public function tambah_ke_keranjang()
	{
		$id_barang = $this->input->post('id_barang');
		$harga = $this->input->post('harga');
		$nama_barang = $this->input->post('nama_barang');
		$tema = $this->input->post('tema');
				  
		$data = array(
		        'id'      => $id_barang,
		        'qty'     => 1,
		        'price'   => $harga,
		        'name'    => $nama_barang,
		        'theme'	  => $tema

		);

		$this->load->library('cart');
		$this->cart->insert($data);
		redirect('dashboard/index');

	}

	public function detail_keranjang()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['tema'] 	= $this->model_tema->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('dashboard/index');
	}

	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		$email = $this->model_invoice->send_mail();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_pesanan',$email);
			$this->load->view('templates/footer');	

		}else{
			echo "Maaf Pesanan Anda gagal diProses";
		}
		
	}

	public function detail($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$data['tema'] = $this->model_tema->tampil_data()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('detail_barang',$data);
			$this->load->view('templates/footer');	

	}

		public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['tema'] = $this->model_tema->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

 
	public function hasil()
	{
		$data['cari'] = $this->model_barang->cari_barang();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('search', $data);
		$this->load->view('templates/footer');
	}

	public function tema()
	{
		$data['tema'] = $this->model_tema->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tampil_tema',$data);
		$this->load->view('templates/footer');
	}

		public function tentang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tentang_kami');
		$this->load->view('templates/footer');
	}

	
}
