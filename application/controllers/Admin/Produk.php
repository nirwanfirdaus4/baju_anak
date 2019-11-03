<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


	public function ukuran()
	{
		$this->load->view('admin/ukuran');			
	}
	
	public function daftarProduk()
	{
		$this->load->view('admin/produk');			
	}

}
