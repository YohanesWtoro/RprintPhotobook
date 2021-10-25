<?php

class Data_barang extends CI_Controller{
	public function __construct(){
	parent::__construct();

	if($this->session->userdata('roll_id') != '1'){
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
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama 			= $this->input->post('nama');
		$harga  		= $this->input->post('harga');
		$ukuran 		= $this->input->post('ukuran');
		$jumlah_foto 	= $this->input->post('jumlah_foto');
		$jumlah_hlm 	= $this->input->post('jumlah_hlm');
		$cover 			= $this->input->post('cover');
		$gambar 		= $_FILES['gambar']['name'];
		if ($gambar =''){}else{
			$config ['upload_path']='upload';
			$config ['allowed_types']='jpg|jpeg|png';

			$this->load->library('./upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "gambar gagal di upload!";
			}else
			{
				$gambar = $this->upload->data('file_name');
			}
		}

		$data= array(
			'nama' 			=>$nama,
			'harga'  		=>$harga,
			'ukuran'    	=>$ukuran,
			'jumlah_foto' 	=>$jumlah_foto,
			'jumlah_hlm'    => $jumlah_hlm,
			'cover'			=>$cover,
			'gambar' 	  	=> $gambar,
		);

		$this->model_barang->tambah_barang($data, 'tbl_barang');
		redirect('admin/data_barang/index');
	}

	public function edit($id)
	{
		$where = array('id_barang' =>$id);
		$data['barang'] = $this->model_barang->edit_barang($where, 'tbl_barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id 			= $this->input->post('id_barang');
		$nama 			= $this->input->post('nama');
		$harga 			= $this->input->post('harga');
		$ukuran 		= $this->input->post('ukuran');
		$jumlah_foto 	= $this->input->post('jumlah_foto');
		$jumlah_hlm 	= $this->input->post('jumlah_hlm');
		$cover 			= $this->input->post('cover');

		$data = array(
			'nama' 			=>$nama,
			'harga'  		=>$harga,
			'ukuran'    	=>$ukuran,
			'jumlah_foto' 	=>$jumlah_foto,
			'jumlah_hlm'    => $jumlah_hlm,
			'cover'			=>$cover,
		);

		$where= array(
			'id_barang' => $id
		);

		$this->model_barang->update_data($where,$data, 'tbl_barang');
		redirect('admin/data_barang/index');
	}

	public function hapus($id)
	{
		$where = array('id_barang' =>$id);
		$this->model_barang->hapus_data($where, 'tbl_barang');
		redirect('admin/data_barang/index');
	}
}