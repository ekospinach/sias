<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->is_login();
    }

    private function is_login(){
        if($this->session->userdata('admin')===FALSE){
            redirect('loguser');
        }
    }

    public function index() {
        $data['navbar'] = $data['title'] = 'pengaturan';
        if(isset($_POST['submit'])){
            if(isset($_POST['onoffswitch'])){
                $this->db->query("UPDATE setting SET value='true' WHERE variable='krsan'");
            }else{
                $this->db->query("UPDATE setting SET value='false' WHERE variable='krsan'");
            }
        }
        $result = $this->db->query('SELECT * FROM setting');
        $data['result']=$result->row();
        $this->load->view('pengaturan/pengaturan_view', $data);
    }

}