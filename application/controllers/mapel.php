<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mapel extends CI_Controller {

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
        $data['navbar'] = $data['title'] = 'mapel';
        if(isset($_POST['pilih'])){
            foreach($_POST['pilih'] as $row){
                $this->db->where('id_mapel', $row);
                $this->db->update('paket',array('id_mapel'=>NULL)); 
                $this->db->delete('mapel',array('id_mapel'=>$row));
            }
        }
        if(isset($_POST['cari'])){
            $result = $this->db->query("SELECT * FROM mapel
                WHERE nama_mapel LIKE '%".$_POST['cari']."%' OR sks LIKE '%".$_POST['cari']."%' OR skm LIKE '%".$_POST['cari']."%'
                ORDER BY nama_mapel");
        }else{
            $result = $this->db->query("SELECT * FROM mapel ORDER BY nama_mapel");
        }
        if($result->num_rows()>0){
            $data['result'] = $result->result();
        }
        $this->load->view('mapel/mapel_view', $data);
    }

    public function lihat($id='') {
        if(empty($id))redirect('mapel');
        $data['navbar'] = $data['title'] = 'mapel';
        $data['title2'] = 'lihat';
        $result = $this->db->query('SELECT * FROM mapel
            WHERE id_mapel="'.$id.'"');
        if($result->num_rows()>0){
            $data['result'] = $result->row();
        }else{
            redirect('mapel');
        }
        $this->load->view('mapel/mapel_lihat_view', $data);
    }

    public function tambah() {
        $data['navbar'] = $data['title'] = 'mapel';
        $data['title2'] = 'tambah';
        $this->form_validation->set_rules('nama_mapel', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required');
        $this->form_validation->set_rules('skm', 'SKM', 'required');
        $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
        if($this->form_validation->run()!==FALSE){
            $result = $this->db->query("SELECT 1 FROM mapel WHERE mapel.nama_mapel='".$_POST['nama_mapel']."'");
            if($result->num_rows()>0){
                $data['error'] = "Mata Pelajaran was exist!";
            } else
            if(isset($_POST['tambah'])){
                $this->db->query("INSERT INTO mapel
                    (`id_mapel`, `nama_mapel`, `sks`, `skm`) 
                    VALUES (NULL, '".$_POST['nama_mapel']."', '".$_POST['sks']."', '".$_POST['skm']."');");
                redirect('mapel');
            }
        }
        $this->load->view('mapel/mapel_tambah_view', $data);
    }

    public function ubah() {
        $data['navbar'] = $data['title'] = 'mapel';
        $data['title2'] = 'tambah';
        if(!isset($_POST['id_mapel']))redirect('mapel');
        $this->form_validation->set_rules('id_mapel', 'id mapel', 'callback_username_check');
        $this->form_validation->set_rules('nama_mapel', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required');
        $this->form_validation->set_rules('skm', 'SKM', 'required');
        $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
        if($this->form_validation->run()!==FALSE){
            $result = $this->db->query("
                SELECT 1 FROM mapel 
                WHERE (
                        SELECT nama_mapel FROM mapel WHERE nama_mapel='".$_POST['nama_mapel']."'
                ) NOT IN (
                        SELECT nama_mapel FROM mapel WHERE id_mapel=".$_POST['id_mapel']."
                )
            ");
            if($result->num_rows()>0){
                $data['error'] = "Mata Pelajaran was exist!";
            } else
            if(isset($_POST['tambah'])){
                $this->db->query("UPDATE mapel SET
                    `nama_mapel`='".$_POST['nama_mapel']."',
                    `sks`='".$_POST['sks']."',
                    `skm`='".$_POST['skm']."'
                    WHERE id_mapel='".$_POST['id_mapel']."'");
                redirect('mapel');
            }
        }
        $this->load->view('mapel/mapel_ubah_view', $data);
    }

}