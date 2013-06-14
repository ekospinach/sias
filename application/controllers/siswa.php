<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['navbar'] = $data['title'] = 'siswa';
        $result = $this->db->query('SELECT id, nis, nama, jalur FROM user');
        if($result->num_rows()>0){
            $data['result'] = $result->result();
        }
        $this->load->view('siswa_view', $data);
    }

    public function lihat($nis='') {
        $data['navbar'] = $data['title'] = 'siswa';
        $data['title2'] = 'lihat';
        $result = $this->db->query('SELECT * FROM user WHERE nis="'.$nis.'" AND 1');
        if($result->num_rows()>0){
            $data['result'] = $result->row();
        }else{
            redirect();
        }
        $this->load->view('siswa_lihat_view', $data);
    }

    public function ubah() {
        $data['navbar'] = $data['title'] = 'siswa';
        $data['title2'] = 'ubah';
        $this->load->view('siswa_ubah_view', $data);
    }

    public function tambah() {
        $data['navbar'] = $data['title'] = 'siswa';
        $data['title2'] = 'tambah';
        $this->load->view('siswa_tambah_view', $data);
    }

}