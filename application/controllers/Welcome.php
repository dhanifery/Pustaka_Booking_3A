<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function penjumlahan($nil1,$nil2)
	{
		$this->load->model('Model_latihan1');
		$hasil = $this->Model_latihan1->jumlah($nil1,$nil2);
		echo "<h4>Hasil Penjumlahan dari :</h4>" .$nil1. " + " .$nil2. " = " .$hasil;
	}
}
