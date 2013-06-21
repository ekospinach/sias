<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Paket extends CI_Controller {

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
        $data['navbar'] = $data['title'] = 'paket';
//        if(isset($_POST['pilih'])){
//            foreach($_POST['pilih'] as $row){
//                $this->db->query("
//                    UPDATE khs SET khs.kode_paket = NULL, khs.kelas = NULL 
//                    WHERE khs.kode_paket = '".$row."'");
//                $this->db->delete('paket',array('kode_paket'=>$row));
//            }
//        }
        if(isset($_POST['cari'])?(empty($_POST['cari'])?FALSE:TRUE):FALSE){
            $result = $this->db->query("
                SELECT paket.kode_paket, paket.kode_syarat, mapel.nama_mapel, mapel.sks, mapel.skm, COUNT(paket.kelas)as jumlah_kelas
                FROM paket
                LEFT JOIN mapel ON mapel.id_mapel=paket.id_mapel
                WHERE paket.kode_paket LIKE '%".$_POST['cari']."%' 
                OR mapel.nama_mapel LIKE '%".$_POST['cari']."%'
                OR mapel.sks LIKE '%".$_POST['cari']."%'
                OR mapel.skm LIKE '%".$_POST['cari']."%'
                ORDER BY nama_mapel");
        }else{
            $result = $this->db->query("
                SELECT paket.kode_paket, paket.kode_syarat, mapel.nama_mapel, mapel.sks, mapel.skm, COUNT(paket.kelas)as jumlah_kelas
                FROM paket
                LEFT JOIN mapel ON mapel.id_mapel=paket.id_mapel
                GROUP BY paket.kode_paket
                ORDER BY paket.kode_paket ASC");
        }
        if($result->num_rows()>0){
            $data['result'] = $result->result();
        }
        $this->load->view('paket/paket_view', $data);
    }
    
    public function lihat($id=''){
        if(empty($id))redirect('paket');
        $data['navbar'] = $data['title'] = 'paket';
        $data['title2'] = 'lihat';
        if(isset($_POST['pilih'])){
            foreach($_POST['pilih'] as $row){
                $resulth = $this->db->query("
                    SELECT 1 FROM paket,khs
                    WHERE paket.id_paket = khs.id_paket
                    AND paket.id_paket= ".$row);
                if($resulth->num_rows()>0){
                    $data['error']='<div style="color:red;">Paket dan kelas Masih Terpakai!</div>';
                }else{
                    $this->db->delete('paket',array('id_paket'=>$row));
                }
            }
        }
        $result = $this->db->query('SELECT paket.kode_paket, paket.kode_syarat, mapel.nama_mapel, mapel.sks, mapel.skm, COUNT(paket.kelas)as jumlah_kelas
            FROM paket
            LEFT JOIN mapel ON mapel.id_mapel=paket.id_mapel
            WHERE paket.kode_paket="'.$id.'"');
        if($result->num_rows()>0){
            $data['result'] = $result->row();
        }else{
            redirect('paket');
        }
        $result2 = $this->db->query('SELECT paket.id_paket, paket.id_paket, paket.kelas, ruang.hari, ruang.jam_mulai,ruang.jam_selesai,ruang.nama_ruang,guru.nip,guru.nama_guru 
            FROM paket
            LEFT JOIN guru ON paket.id_guru=guru.id_guru
            LEFT JOIN mapel ON paket.id_mapel=mapel.id_mapel
            LEFT JOIN ruang ON paket.id_ruang=ruang.id_ruang
            Where paket.kode_paket="'.$id.'"
            ORDER BY paket.kelas');
        if($result2->num_rows()>0){
            $data['result2'] = $result2->result();
        }
        $this->load->view('paket/paket_lihat_view', $data);
    }

    public function tambah() {
        $data['navbar'] = $data['title'] = 'paket';
        $data['title2'] = 'tambah';
        $rkp=$this->db->query("SELECT * FROM mapel");
        if($rkp->num_rows()>0){
            $data['dmapel']=$rkp->result();
        }else{
            $data['dmapel']=FALSE;
        }
        $rkp=$this->db->query("SELECT paket.kode_paket,mapel.nama_mapel FROM paket,mapel WHERE paket.id_mapel=mapel.id_mapel GROUP BY paket.kode_paket");
        if($rkp->num_rows()>0){
            $data['dpaket']=$rkp->result();
        }else{
            $data['dpaket']=FALSE;
        }
        $this->form_validation->set_rules('kode_paket', 'Kode Paket', 'required');
        $this->form_validation->set_rules('kode_syarat', 'Kode Syarat', 'callback_username_check');
        $this->form_validation->set_rules('semester', 'semester', 'callback_username_check');
        $this->form_validation->set_rules('batas', 'Batas', 'callback_username_check');
        $this->form_validation->set_rules('id_mapel', 'ID Mapel', 'required');
        $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
        if($this->form_validation->run()!==FALSE){
            $result = $this->db->query("
                SELECT * FROM paket 
                WHERE '".$_POST['kode_paket']."' IN (SELECT kode_paket FROM paket WHERE id_mapel=".$_POST['id_mapel']." AND semester=".$_POST['semester'].")
                OR '".$_POST['kode_paket']."' NOT IN (SELECT kode_paket FROM paket)
            ");
            if($_POST['kode_paket']===$_POST['kode_syarat']){
                $data['error'] = "Kode tidak boleh sama!";
                $this->load->view('paket/paket_tambah_view', $data);
            } else
            if($result->num_rows()==0){
                $data['error2'] = "Mata pelajaran atau semester tidak cocok!";
                $this->load->view('paket/paket_tambah_view', $data);
            } else {
                $rkp=$this->db->query("SELECT * FROM ruang");
                if($rkp->num_rows()>0){
                    $data['druang']=$rkp->result();
                }else{
                    $data['druang']=FALSE;
                }
                $rkp=$this->db->query("SELECT * FROM guru");
                if($rkp->num_rows()>0){
                    $data['dguru']=$rkp->result();
                }else{
                    $data['dguru']=FALSE;
                }
                if(isset($_POST['tambahin'])){
                    $this->db->query("
                        INSERT INTO paket (
                        `id_paket` ,
                        `kode_paket` ,
                        `kode_syarat` ,
                        `kelas` ,
                        `batas` ,
                        `semester` ,
                        `id_mapel` ,
                        `id_ruang` ,
                        `id_guru`
                        )
                        VALUES (
                        NULL ,  
                        '".$_POST['kode_paket']."', 
                        ".(empty($_POST['kode_syarat'])?"NULL":"'".$_POST['kode_syarat']."'")." ,  
                        ".(empty($_POST['kelas'])?"NULL":"'".$_POST['kelas']."'").",  
                        ".(empty($_POST['batas'])?"NULL":"'".$_POST['batas']."'").",  
                        ".(empty($_POST['semester'])?"NULL":"'".$_POST['semester']."'").",  
                        ".(empty($_POST['id_mapel'])?"NULL":"'".$_POST['id_mapel']."'").",  
                        ".(empty($_POST['id_ruang'])?"NULL":"'".$_POST['id_ruang']."'").",  
                        ".(empty($_POST['id_guru'])?"NULL":"'".$_POST['id_guru']."'")."
                        );
                    ");
                    redirect('paket/lihat/'.$_POST['kode_paket']);
                }else{
                    $this->load->view('paket/paket_tambah_next_view', $data);
                }
            }
        }else
        $this->load->view('paket/paket_tambah_view', $data);
    }

    public function tambah_kelas(){
        $rkp=$this->db->query("SELECT * FROM ruang");
        if($rkp->num_rows()>0){
            $data['druang']=$rkp->result();
        }else{
            $data['druang']=FALSE;
        }
        $rkp=$this->db->query("SELECT * FROM guru");
        if($rkp->num_rows()>0){
            $data['dguru']=$rkp->result();
        }else{
            $data['dguru']=FALSE;
        }
        if(isset($_POST['tambahin'])){
            $this->db->query("
                INSERT INTO paket (
                `id_paket` ,
                `kode_paket` ,
                `kode_syarat` ,
                `kelas` ,
                `batas` ,
                `semester` ,
                `id_mapel` ,
                `id_ruang` ,
                `id_guru`
                )
                VALUES (
                NULL ,  
                '".$_POST['kode_paket']."', 
                ".(empty($_POST['kode_syarat'])?"NULL":"'".$_POST['kode_syarat']."'")." ,  
                ".(empty($_POST['kelas'])?"NULL":"'".$_POST['kelas']."'").",  
                ".(empty($_POST['batas'])?"NULL":"'".$_POST['batas']."'").",  
                ".(empty($_POST['semester'])?"NULL":"'".$_POST['semester']."'").",  
                ".(empty($_POST['id_mapel'])?"NULL":"'".$_POST['id_mapel']."'").",  
                ".(empty($_POST['id_ruang'])?"NULL":"'".$_POST['id_ruang']."'").",  
                ".(empty($_POST['id_guru'])?"NULL":"'".$_POST['id_guru']."'")."
                );
            ");
            redirect('paket/lihat/'.$_POST['kode_paket']);
        }else{
            $this->load->view('paket/paket_tambah_next_view', $data);
        }
    }
    
}