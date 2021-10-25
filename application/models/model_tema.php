<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_tema extends CI_Model {
	
	public function tampil_data()
	{
		return $this->db->get('tb_tema');
	}


	public function find($id)
	{
		$result = $this->db->where('id_tema', $id)
						 ->limit(1)
						 ->get('tb_tema');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}



}