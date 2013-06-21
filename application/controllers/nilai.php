<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nilai extends CI_Controller {

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
        $data['navbar'] = $data['title'] = 'nilai';
        if(isset($_POST['pilih'])){
            foreach($_POST['pilih'] as $row){
                $this->db->delete('khs',array('id_khs'=>$row));
            }
        }
        if(isset($_POST['cari'])){
            $result = $this->db->query("
                SELECT khs.id_khs, user.nis, user.nama, khs.tahun, khs.semester, paket.kelas, mapel.nama_mapel, guru.nama_guru
                FROM user,khs,paket,mapel,guru 
                WHERE user.nis=khs.nis
                AND khs.id_paket=paket.id_paket
                AND paket.id_guru=guru.id_guru
                AND paket.id_mapel=mapel.id_mapel
                AND (khs.nis LIKE '%".$_POST['cari']."%' 
                OR user.nama LIKE '%".$_POST['cari']."%' 
                OR mapel.nama_mapel LIKE '%".$_POST['cari']."%' 
                OR khs.tahun LIKE '%".$_POST['cari']."%' 
                OR khs.semester LIKE '%".$_POST['cari']."%' 
                OR guru.nama_guru LIKE '%".$_POST['cari']."%' 
                OR paket.kelas LIKE '%".$_POST['cari']."%' )
                ORDER BY nis");
        }else{
            $result = $this->db->query("
                SELECT khs.id_khs, user.nis, user.nama, khs.tahun, khs.semester, paket.kelas, mapel.nama_mapel, guru.nama_guru
                FROM user,khs,paket,mapel,guru 
                WHERE user.nis=khs.nis
                AND khs.id_paket=paket.id_paket
                AND paket.id_guru=guru.id_guru
                AND paket.id_mapel=mapel.id_mapel
                ".(isset($_POST['tahun'])?(empty($_POST['tahun'])?'':" AND khs.tahun = '".$_POST['tahun']."'"):'')."
                ".(isset($_POST['tahun'])?(empty($_POST['tahun'])?'':" AND khs.tahun = '".$_POST['tahun']."'"):'')."
                ".(isset($_POST['tahun'])?(empty($_POST['tahun'])?'':" AND khs.tahun = '".$_POST['tahun']."'"):'')."
                ".(isset($_POST['tahun'])?(empty($_POST['tahun'])?'':" AND khs.tahun = '".$_POST['tahun']."'"):'')."
                ".(isset($_POST['tahun'])?(empty($_POST['tahun'])?'':" AND khs.tahun = '".$_POST['tahun']."'"):'')."
                ORDER BY nis");
        }
        if($result->num_rows()>0){
            $data['result'] = $result->result();
        }
        $this->load->view('nilai/nilai_view', $data);
    }

    public function ubah($id_khs='') {
        $data['navbar'] = $data['title'] = 'nilai';
        $data['title2'] = 'ubah';
        if(empty($id_khs))redirect('nilai');
        $this->form_validation->set_rules('nip', 'NIP', 'callback_username_check');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
        $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
        if($this->form_validation->run()!==FALSE){
            $result = $this->db->query("SELECT 1 FROM guru WHERE guru.nip='".$_POST['nip']."'");
            if($result->num_rows()>0){
                $data['error'] = "NIP was exist!";
            } else
            if(isset($_POST['tambah'])){
                $this->db->query("UPDATE guru SET
                    `nama_guru`='".$_POST['nama_guru']."' 
                    WHERE nip='".$_POST['nip']."'");
                redirect('guru/lihat/'.$_POST['nip']);
            }
        }
        $this->load->view('nilai/nilai_ubah_view', $data);
    }

}