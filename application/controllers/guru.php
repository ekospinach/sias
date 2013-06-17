<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru extends CI_Controller {

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
        $data['navbar'] = $data['title'] = 'guru';
        if(isset($_POST['pilih'])){
            foreach($_POST['pilih'] as $row){
                $this->db->where('id_guru', $row);
                $this->db->update('paket',array('id_guru'=>NULL)); 
                $this->db->delete('guru',array('id_guru'=>$row));
            }
        }
        if(isset($_POST['cari'])){
            $result = $this->db->query("SELECT guru.id_guru, guru.nip, guru.nama_guru, COUNT(paket.id_paket) as jumlah_jadwal
                FROM guru
                LEFT JOIN paket ON paket.id_guru=guru.id_guru
                WHERE paket.id_guru=guru.id_guru AND nip LIKE '%".$_POST['cari']."%' OR nama_guru LIKE '%".$_POST['cari']."%'
                GROUP BY guru.id_guru");
        }else{
            $result = $this->db->query('SELECT guru.id_guru, guru.nip, guru.nama_guru, COUNT(paket.id_paket) as jumlah_jadwal
                FROM guru
                LEFT JOIN paket ON paket.id_guru=guru.id_guru
                GROUP BY guru.id_guru');
        }
        if($result->num_rows()>0){
            $data['result'] = $result->result();
        }
        $this->load->view('guru/guru_view', $data);
    }

    public function lihat($nip='') {
        if(empty($nip))redirect('guru');
        $data['navbar'] = $data['title'] = 'guru';
        $data['title2'] = 'lihat';
        $result = $this->db->query('SELECT guru.nip, guru.nama_guru, count(guru.id_guru) as jumlah_jadwal FROM guru,paket
            WHERE paket.id_guru=guru.id_guru AND nip="'.$nip.'"');
        if($result->num_rows()>0){
            $data['result'] = $result->row();
        }else{
            redirect('guru');
        }
        $result2 = $this->db->query('SELECT paket.kelas, ruang.hari, ruang.jam_mulai,ruang.jam_selesai,mapel.nama_mapel,mapel.sks,ruang.nama_ruang FROM guru,paket,mapel,ruang
            WHERE paket.id_guru=guru.id_guru
            AND paket.id_mapel=mapel.id_mapel
            AND paket.id_ruang=ruang.id_ruang
            AND guru.nip="'.$nip.'"');
        if($result2->num_rows()>0){
            $data['result2'] = $result2->result();
        }
        $this->load->view('guru/guru_lihat_view', $data);
    }

    public function ubah() {
        $data['navbar'] = $data['title'] = 'guru';
        $data['title2'] = 'ubah';
        if(!isset($_POST['nip']))redirect('guru');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
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
        $this->load->view('guru/guru_ubah_view', $data);
    }

    public function tambah() {
        $data['navbar'] = $data['title'] = 'guru';
        $data['title2'] = 'tambah';
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
        $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
        if($this->form_validation->run()!==FALSE){
            $result = $this->db->query("SELECT 1 FROM guru WHERE guru.nip='".$_POST['nip']."'");
            if($result->num_rows()>0){
                $data['error'] = "NIP was exist!";
            } else
            if(isset($_POST['tambah'])){
                $this->db->query("INSERT INTO guru
                    (`id_guru`, `nip`, `nama_guru`) 
                    VALUES (NULL, '".$_POST['nip']."', '".$_POST['nama_guru']."');");
                redirect('guru/lihat/'.$_POST['nip']);
            }
        }
        $this->load->view('guru/guru_tambah_view', $data);
    }

}