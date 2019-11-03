<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdl_produk extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function ambildata()
	{
		$query = $this->db->query("SELECT * FROM tb_ukuran");
		return $query->result_array();
	}
	
	public function ambildata_produk()
	{
		$query = $this->db->query("SELECT * FROM tb_produk");
		return $query->result_array();
	}

	public function ambildata2($id)
	{
		$query = $this->db->query("SELECT * FROM tb_ukuran WHERE id_ukuran=$id");
		return $query->result_array();
	}
	
	public function ambildata_produk2($id)
	{
		$query = $this->db->query("SELECT * FROM tb_produk WHERE id_produk=$id");
		return $query->result_array();
	}

	public function tambahdata($paket)
	{
		$this->db->insert('tb_ukuran', $paket);
		return $this->db->affected_rows();
	}
	
	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function update($send)
	{
		$sql = "UPDATE tb_ukuran SET nama_ukuran = ?,harga = ? WHERE id_ukuran = ?";
		$query = $this->db->query($sql, array($send['nama_ukuran'],$send['harga'], $send['id_ukuran']));
	}
}
