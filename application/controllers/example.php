<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Example extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect('example/test');
    }

    public function test() {
        if (isset($_POST['s'])) {
            $data['hasil'] = $_POST['s'];
            $query = $this->db->query("SELECT * FROM khs WHERE khs.semester=".$_POST['s']." AND khs.nis=".$_POST['ss']);
            if ($query->num_rows() > 0) {
                $data['result'] = $query->result_array();
            }
            $this->load->view('test2_view', $data);
        } else {
            $query = $this->db->query("SELECT khs.semester FROM khs GROUP BY khs.semester");
            if ($query->num_rows() > 0) {
                $data['result1'] = $query->result_array();
            }
            $query = $this->db->query("SELECT nis FROM khs GROUP BY khs.nis");
            if ($query->num_rows() > 0) {
                $data['result2'] = $query->result_array();
            }
            $this->load->view('test_view', $data);
        }
    }

}