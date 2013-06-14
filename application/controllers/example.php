<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Example extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_karyawan');
    }

    public function index($id = NULL) {
        $jml = $this->db->get('tbl_karyawan');
        //pengaturan pagination
        $config['base_url'] = base_url() . 'example/index';
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = '5';
        $config['first_page'] = 'Awal';
        $config['last_page'] = 'Akhir';
        $config['next_page'] = '&laquo;';
        $config['prev_page'] = '&raquo;';
        //inisialisasi config
        $this->pagination->initialize($config);
        //buat pagination
        $data['halaman'] = $this->pagination->create_links();
        //tamplikan data
        $data['query'] = $this->m_karyawan->ambil_karyawan($config['per_page'], $id);
        $this->load->view('karyawan_view', $data);
    }

    public function test() {
        if (isset($_POST['s'])) {
            $data['hasil'] = $_POST['s'];
            $query = $this->db->query("SELECT * FROM khs WHERE khs.semester=" . $_POST['s'] . " AND khs.nis=" . $_POST['ss']);
            if ($query->num_rows() > 0) {
                $data['result'] = $query->result_array();
            }else{
                $data['result'] = array();
            }
            $this->load->view('test2_view', $data);
        } else {
            $query = $this->db->query("SELECT khs.semester FROM khs GROUP BY khs.semester");
            if ($query->num_rows() > 0) {
                $data['result1'] = $query->result_array();
            }else{
                $data['result1'] = array();
            }
            $query = $this->db->query("SELECT nis FROM khs GROUP BY khs.nis");
            if ($query->num_rows() > 0) {
                $data['result2'] = $query->result_array();
            }else{
                $data['result2'] = array();
            }
            $this->load->view('test_view', $data);
        }
    }

}