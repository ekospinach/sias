<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['navbar'] = $data['title'] = 'guru';
        $this->load->view('guru_view', $data);
    }

    public function lihat() {
        $data['navbar'] = $data['title'] = 'guru';
        $data['title2'] = 'lihat';
        $this->load->view('guru_lihat_view', $data);
    }

    public function ubah() {
        $data['navbar'] = $data['title'] = 'guru';
        $data['title2'] = 'ubah';
        $this->load->view('guru_ubah_view', $data);
    }

    public function tambah() {
        $data['navbar'] = $data['title'] = 'guru';
        $data['title2'] = 'tambah';
        $this->load->view('guru_tambah_view', $data);
    }

}