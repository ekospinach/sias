<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ruang extends CI_Controller {

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
        $data['navbar'] = $data['title'] = 'ruang';
        if(isset($_POST['pilih'])){
            foreach($_POST['pilih'] as $row){
                $this->db->where('id_ruang', $row);
                $this->db->update('paket',array('id_ruang'=>NULL)); 
                $this->db->delete('ruang',array('id_ruang'=>$row));
            }
        }
        if(isset($_POST['cari'])){
            $result = $this->db->query("
                SELECT * FROM ruang
                WHERE nama_ruang LIKE '%".$_POST['cari']."%' OR jam_mulai LIKE '%".$_POST['cari']."%' 
                OR jam_selesai LIKE '%".$_POST['cari']."%' OR hari LIKE '%".$_POST['cari']."%'");
        }else{
            $result = $this->db->query("SELECT * FROM ruang");
        }
        if($result->num_rows()>0){
            $data['result'] = $result->result();
        }
        $this->load->view('ruang/ruang_view', $data);
    }

    public function lihat($id='') {
        if(empty($id))redirect('ruang');
        $data['navbar'] = $data['title'] = 'ruang';
        $data['title2'] = 'lihat';
        $result = $this->db->query('SELECT * FROM ruang
            WHERE id_ruang="'.$id.'"');
        if($result->num_rows()>0){
            $data['result'] = $result->row();
        }else{
            redirect('ruang');
        }
        $this->load->view('ruang/ruang_lihat_view', $data);
    }

    public function tambah() {
        $data['navbar'] = $data['title'] = 'ruang';
        $data['title2'] = 'tambah';
        $this->form_validation->set_rules('nama_ruang', 'Nama Ruangan', 'required');
        $this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'required');
        $this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
        if($this->form_validation->run()!==FALSE){
            if(isset($_POST['tambah'])){
                $this->db->query("INSERT INTO ruang
                    (`id_ruang`, `nama_ruang`, `jam_mulai`, `jam_selesai`, `hari`) 
                    VALUES (NULL, '".$_POST['nama_ruang']."', '".$_POST['jam_mulai']."', '".$_POST['jam_selesai']."', '".$_POST['hari']."');");
                redirect('ruang');
            }
        }
        $this->load->view('ruang/ruang_tambah_view', $data);
    }

    public function ubah() {
        $data['navbar'] = $data['title'] = 'ruang';
        $data['title2'] = 'tambah';
        if(!isset($_POST['id_ruang']))redirect('ruang');
        $this->form_validation->set_rules('id_ruang', 'ID Ruangan', 'callback_username_check');
        $this->form_validation->set_rules('nama_ruang', 'Nama Ruangan', 'required');
        $this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'required');
        $this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
        if($this->form_validation->run()!==FALSE){
            if(isset($_POST['tambah'])){
                $this->db->query("UPDATE ruang SET
                    `nama_ruang`='".$_POST['nama_ruang']."',
                    `jam_mulai`='".$_POST['jam_mulai']."',
                    `jam_selesai`='".$_POST['jam_selesai']."',
                    `hari`='".$_POST['hari']."'
                    WHERE id_ruang='".$_POST['id_ruang']."'");
                redirect('ruang');
            }
        }
        $this->load->view('ruang/ruang_ubah_view', $data);
    }

}