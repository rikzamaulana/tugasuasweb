<?php

/**
* 
*/
class M_transaksi extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}
	public function input($harga)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'notelp' => $this->input->post('phone'),
			'berat' => $this->input->post('berat'),
			'tanggal' =>  $this->input->post('tanggal'),
			'harga' => $harga );
		return $this->db->insert('transaksi', $data);
	}
	public function get_transaksi()
	{
		$query = $this->db->get('transaksi');
		return $query->result_array();
	}
}