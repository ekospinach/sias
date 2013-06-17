<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['navbar'] = $data['title'] = 'pengaturan';
        $this->load->view('pengaturan_view', $data);
    }

}