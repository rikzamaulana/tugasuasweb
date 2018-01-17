<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		$data['no'] = 1;
		$data['anu'] = $this->m_transaksi->get_transaksi();
		$this->load->view('transaksi', $data);
	}
	public function input()
	{
		$brt = (int)$this->input->post('berat');
		$harga = $brt * 4500;
		$this->m_transaksi->input($harga);
		redirect('transaksi');
	}
}
