<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Akademik extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['navbar'] = $data['title'] = 'akademik';
        $this->load->view('akademik_view', $data);
    }

    public function mapel() {
        $data['navbar'] = $data['title'] = 'akademik';
        $data['title2'] = 'mapel';
        $this->load->view('akademik_mapel_view', $data);
    }
    
    public function mapel_tambah() {
        $data['navbar'] = $data['title'] = 'akademik';
        $data['title2'] = 'mapel';
        $this->load->view('akademik_mapel_view', $data);
    }
    
    public function mapel_lihat() {
        $data['navbar'] = $data['title'] = 'akademik';
        $data['title2'] = 'mapel';
        $this->load->view('akademik_mapel_view', $data);
    }

    public function kelas() {
        $data['navbar'] = $data['title'] = 'akademik';
        $data['title2'] = 'kelas';
        $this->load->view('akademik_kelas_view', $data);
    }

    public function paket() {
        $data['navbar'] = $data['title'] = 'akademik';
        $data['title2'] = 'paket';
        $this->load->view('akademik_paket_view', $data);
    }

    public function nilai() {
        $data['navbar'] = $data['title'] = 'akademik';
        $data['title2'] = 'nilai';
        $this->load->view('akademik_nilai_view', $data);
    }

}