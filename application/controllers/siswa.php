<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa extends CI_Controller {

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
        $data['navbar'] = $data['title'] = 'siswa';
        if(isset($_POST['pilih'])){
            foreach($_POST['pilih'] as $row){
                $this->db->delete('user',array('id'=>$row));
            }
        }
        if(isset($_POST['cari'])){
            $result = $this->db->query("SELECT id, nis, nama, jalur FROM user WHERE nis LIKE '%".$_POST['cari']."%' OR nama LIKE '%".$_POST['cari']."%'");
        }else{
            $result = $this->db->query('SELECT id, nis, nama, jalur FROM user');
        }
        if($result->num_rows()>0){
            $data['result'] = $result->result();
        }
        $this->load->view('siswa/siswa_view', $data);
    }

    public function lihat($nis='') {
        if(empty($nis))redirect('siswa');
        $data['navbar'] = $data['title'] = 'siswa';
        $data['title2'] = 'lihat';
        $result = $this->db->query('SELECT * FROM user WHERE nis="'.$nis.'" AND 1');
        if($result->num_rows()>0){
            $data['result'] = $result->row();
        }else{
            redirect('siswa');
        }
        $this->load->view('siswa/siswa_lihat_view', $data);
    }

    public function ubah() {
        $data['navbar'] = $data['title'] = 'siswa';
        $data['title2'] = 'ubah';
        if(!isset($_POST['nis']))redirect('siswa');
        if(isset($_POST['foto']))$data['foto']=$_POST['foto'];
        $this->form_validation->set_rules('nis', 'Nis', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'callback_username_check');
        $this->form_validation->set_rules('tanggal', 'Tangga', 'callback_username_check');
        $this->form_validation->set_rules('alamat', 'Alamat', 'callback_username_check');
        $this->form_validation->set_rules('agama', 'Agama', 'callback_username_check');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'callback_username_check');
        $this->form_validation->set_rules('goldar', 'Golongan Darah', 'callback_username_check');
        $this->form_validation->set_rules('no_hp', 'No. Handphone', 'callback_username_check|numeric');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'callback_username_check');
        $this->form_validation->set_rules('hp_ayah', 'No HP Ayah', 'callback_username_check');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'callback_username_check');
        $this->form_validation->set_rules('hp_ibu', 'No HP Ibu', 'callback_username_check');
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'callback_username_check');
        $this->form_validation->set_rules('hp_wali', 'No HP Wali', 'callback_username_check');
        $this->form_validation->set_rules('alamat_ortu', 'Alamat Orang Tua', 'callback_username_check');
        $this->form_validation->set_rules('alamat_wali', 'Alamat Wali', 'callback_username_check');
        $this->form_validation->set_rules('jalur', 'Jalur Masuk', 'callback_username_check');
        $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
        if($this->form_validation->run()!==FALSE){
            if(isset($_POST['ubahfix'])){
                $this->db->query("UPDATE user SET 
                    nama='".$_POST['nama']."', tempat='".$_POST['tempat']."', tanggal='".$_POST['tanggal']."', alamat='".$_POST['alamat']."', agama='".$_POST['agama']."', jenis_kelamin='".$_POST['jenis_kelamin']."', goldar='".$_POST['goldar']."', no_hp='".$_POST['no_hp']."', nama_ayah='".$_POST['nama_ayah']."', hp_ayah='".$_POST['hp_ayah']."', nama_ibu='".$_POST['nama_ibu']."', hp_ibu='".$_POST['hp_ibu']."', nama_wali='".$_POST['nama_wali']."', hp_wali='".$_POST['hp_wali']."', alamat_ortu='".$_POST['alamat_ortu']."', alamat_wali='".$_POST['alamat_wali']."', jalur='".$_POST['jalur'].
                    "' WHERE `nis` = '".$_POST['nis']."';");
                redirect('siswa/lihat/'.$_POST['nis']);
            }
        }
        $this->load->view('siswa/siswa_ubah_view', $data);
    }

    public function tambah() {
        $data['navbar'] = $data['title'] = 'siswa';
        $data['title2'] = 'tambah';
        $this->form_validation->set_rules('nis', 'Nis', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required|matches[passconf]|md5|xss_clean');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'callback_username_check');
        $this->form_validation->set_rules('tanggal', 'Tangga', 'callback_username_check');
        $this->form_validation->set_rules('alamat', 'Alamat', 'callback_username_check');
        $this->form_validation->set_rules('agama', 'Agama', 'callback_username_check');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'callback_username_check');
        $this->form_validation->set_rules('goldar', 'Golongan Darah', 'callback_username_check');
        $this->form_validation->set_rules('no_hp', 'No. Handphone', 'callback_username_check');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'callback_username_check');
        $this->form_validation->set_rules('hp_ayah', 'No HP Ayah', 'callback_username_check');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'callback_username_check');
        $this->form_validation->set_rules('hp_ibu', 'No HP Ibu', 'callback_username_check');
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'callback_username_check');
        $this->form_validation->set_rules('hp_wali', 'No HP Wali', 'callback_username_check');
        $this->form_validation->set_rules('alamat_ortu', 'Alamat Orang Tua', 'callback_username_check');
        $this->form_validation->set_rules('alamat_wali', 'Alamat Wali', 'callback_username_check');
        $this->form_validation->set_rules('jalur', 'Jalur Masuk', 'callback_username_check');
        $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
        if($this->form_validation->run()!==FALSE){
            if(isset($_POST['tambah'])){
                $this->db->query("INSERT INTO user
                    (`id`, `nis`, `pass`, `nama`, `tempat`, `tanggal`, `alamat`, `agama`, `jenis_kelamin`, `goldar`, `no_hp`, `nama_ayah`, `hp_ayah`, `nama_ibu`, `hp_ibu`, `nama_wali`, `hp_wali`, `alamat_ortu`, `alamat_wali`, `foto`, `angkatan`, `bahasa`, `jalur`) 
                    VALUES (NULL, '".$_POST['nis']."', '".$_POST['pass']."', '".$_POST['nama']."', '".$_POST['tempat']."', '".$_POST['tanggal']."', '".$_POST['alamat']."', '".$_POST['agama']."', '".$_POST['jenis_kelamin']."', '".$_POST['goldar']."', '".$_POST['no_hp']."', 
                    '".$_POST['nama_ayah']."', '".$_POST['hp_ayah']."', '".$_POST['nama_ibu']."', '".$_POST['hp_ibu']."', '".$_POST['nama_wali']."', '".$_POST['hp_wali']."', '".$_POST['alamat_ortu']."', '".$_POST['alamat_wali']."', NULL, NULL, '', '".$_POST['jalur']."');");
                redirect('siswa/lihat/'.$_POST['nis']);
            }
        }
        $this->load->view('siswa/siswa_tambah_view', $data);
    }

}