<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loguser extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('loguser_model');
    }
    
    private function is_login(){
        if($this->session->userdata('admin')!==FALSE){
            redirect('siswa');
        }
    }

    public function index(){
        redirect('loguser/login');
    }
    
    public function login(){
        $this->is_login();
        if($_POST){
            if($this->loguser_model->check_login($_POST['username'], $_POST['password'])===TRUE){
                redirect('','refresh');
            }else{
                $data['pesan']='Username atau Password salah!';
                $this->load->view('login_view',$data);
            }
        }else{
            $this->load->view('login_view');
        }
    }
    
    public function logout(){
        $this->loguser_model->logout();
        redirect('', 'refresh');
    }
}
//$msg = 'Keamanan SIAS';
//$key = '4j6h3n09c87';
//$this->load->library('encrypt');
//$data['encrypt'] = $this->encrypt->encode($msg, $key);
