<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loguser_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function check_login($username,$password){
        $query = $this->db->query(
                'SELECT `nama`, `pass` FROM `user` WHERE `nis` = "'.$username.'"'
        );
        if($query->num_rows() > 0){
            $row = $query->row();
            if(md5($password) == $row->pass){
                $this->session->set_userdata(array('siswa'=>$row->nama,'nis'=>$username));
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            $query = $this->db->query(
                    'SELECT `nama_admin`, `password` FROM `admin` WHERE `username` = "'.$username.'"'
            );
            if($query->num_rows() > 0){
                $row = $query->row();
                if(md5($password) == $row->password){
                    $this->session->set_userdata(array('admin'=>$row->nama_admin));
                    return TRUE;
                }else{
                    return FALSE;
                }
            }else{
                return FALSE;
            }
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
    }
}
