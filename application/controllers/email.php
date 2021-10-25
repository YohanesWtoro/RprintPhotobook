<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class email extends CI_Controller 
	{

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
        $this->email->message("Ada pemesanan <?php echo anchor('dashboard_admin/index')");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $this->load->view('proses_pesanan');
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
} 