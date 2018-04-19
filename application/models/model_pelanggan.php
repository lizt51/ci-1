<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelanggan extends CI_Model {

	function __construct() { parent::__construct(); } function getAllPelanggan() {
			//select semua data yang ada pada table msProduct $this--->db->select("*");
			$this->db->from("tb_pelanggan");

			return $this->db->get();
		}

		function getPelanggan($id)
		{
			//select produk berdasarkan id yang dimiliki
			  $this->db->where('id', $id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
	        $this->db->select("*");
	        $this->db->from("tb_pelanggan");

	        return $this->db->get();
		}

		function addPelanggan($data)
		{
			//untuk insert data ke database

			$this->db->insert('tb_pelanggan', $data);

		}

		function updatePelanggan($id)
		{
			//update produk berdasarkan id
			 $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
				$this->db->update('tb_pelanggan', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller

		}

		function deletePelanggan($id)
		{
			//delete produk berdasarkan id
			 $this->db->where('id', $id);
	        $this->db->delete('tb_pelanggan');
		}
}
