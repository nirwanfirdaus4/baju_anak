<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct() //MEMPERSIAPKAN
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('mdl_produk');
        $this->load->library('form_validation');
        $this->load->database();
        // if ($this->session->userdata('masuk') == FALSE) {
        //     redirect('Admin/Login', 'refresh');
        // }
    }


	public function ukuran()
	{
        $paket['array'] = $this->mdl_produk->ambildata();
		$this->load->view('admin/ukuran', $paket);			
	}
	
	public function daftarProduk()
	{
		$this->load->view('admin/produk');			
	}


    public function tambahdata()
    {
        $this->form_validation->set_rules('nama_ukuran', 'Nama Ukuran', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga Ukuran', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['msg_error'] = "Silahkan isi semua kolom";
            $this->load->view('admin/vtambah_ukuran', $data);
        } else {
            $send['id_ukuran'] = '';
            $send['nama_ukuran'] = $this->input->post('nama_ukuran');
            $send['harga'] = $this->input->post('harga');

            $this->mdl_produk->tambahdata($send);
            
            $this->session->set_flashdata('msg', 'Data berhasil ditambahkan');
            redirect('admin/Produk/ukuran');
        }
    }


    public function hapus($id)
    {
        $where = array('id_ukuran' => $id);
        $this->mdl_produk->delete_data($where, 'tb_ukuran');
        $this->session->set_flashdata('msg_delete', 'Data berhasil dihapus');
        redirect('admin/Produk/ukuran');
    }

    public function edit($id_update)
    {
        $this->form_validation->set_rules('nama_ukuran', 'Nama Ukuran', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga Ukuran', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $indexrow['data'] = $this->mdl_produk->ambildata2($id_update);
            $this->load->view('admin/vedit_ukuran', $indexrow);            
        } else {
            $send['id_ukuran'] = $id_update;
            $send['nama_ukuran'] = $this->input->post('nama_ukuran');
            $send['harga'] = $this->input->post('harga');

            $kembalian['jumlah'] = $this->mdl_produk->update($send);
            $this->session->set_flashdata('msg_update', 'Data Berhasil diupdate');
	        redirect('admin/Produk/ukuran');
        }
    }

}
