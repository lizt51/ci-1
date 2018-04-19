<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class Pelanggan extends REST_Controller {


	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('tb_pelanggan')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('tb_pelanggan')->result();
        }
        $this->response(array(
					"status"=>true,
					"data"=>$kontak
					)
				);
    }

	function index_post() {
		$json= json_decode($this->post('data'));
		// $this->response($json);
		// // print_r($json->nama);
    //     $data = array(
    //                 'nama'          => $this->post('nama'),
    //                 'alamat'    => $this->post('alamat'),
    //                 'no_tlp'    => $this->post('no_tlp'));
        $insert = $this->db->insert('tb_pelanggan', $json);
        if ($insert) {
            $this->response($json, 200);
        } else {
            $this->response(array('status' => 'fail', 200));
        }
    }

	function index_put() {
		$json= json_decode($this->put('data'));

		     $id = $this->put('data[0]');
        // $data = array(
        //             'id'           => $this->put('id'),
        //             'nama'          => $this->put('nama'),
        //             'alamat'    => $this->put('alamat'),
        //             'no_tlp'    => $this->put('no_tlp'));
        $this->db->where('id', $id);
        $update = $this->db->update('tb_pelanggan', $json);
        if ($update) {
            $this->response($json, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

	function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('tb_pelanggan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}
