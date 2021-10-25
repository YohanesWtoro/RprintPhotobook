<?php

class Model_invoice extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');

		$invoice = array(
			'nama' => $nama,
			'alamat'=> $alamat,
			'no_telp' =>$no_telp,
			'email' => $email,	 	
			'tgl_pesan'=> date('Y-m-d h:i:s'),
			'batas_bayar' => date('Y-m-d h:i:s', mktime(date('H'),date('i'),date('s'),date('m'),date('d')+1,date('y'))),
		);

		$this->db->insert('tb_invoice',$invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice' => $id_invoice,
				'id_barang' =>$item['id'],
				'nama_barang' =>$item['name'],
				'jumlah' => $item['qty'],
				'harga' => $item['price'],
				'tema' =>$item['theme']
			);

			$this->db->insert('tb_pesanan',$data);
		}

		return TRUE;
	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_invoice');
		if($result->num_rows()>0){
			return $result->result();
		}else{
			return False;
		}
	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id',$id_invoice)->limit(1)->get('tb_invoice');
		if($result->num_rows()>0){
			return $result->row();
		}else{
			return false;
		}
	}

	public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice',$id_invoice)->get('tb_pesanan');
		if($result->num_rows()>0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function send_mail() { 


        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'yohanesw240@gmail.com',  // Email gmail
            'smtp_pass'   => 'mataikan89',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('yohanesw240@gmail.com', 'Rprint Photobook');

        // Email penerima
        $this->email->to('yohaneswow@gmail.com'); // Ganti dengan email tujuan

        // Subject email
        $this->email->subject('Notifikasi pemesanan');

        // Isi email
        $this->email->message("Ada pemesanan baru masuk mohon cek");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }

}