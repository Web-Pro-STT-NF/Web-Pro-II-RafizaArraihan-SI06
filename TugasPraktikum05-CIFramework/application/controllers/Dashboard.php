<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function index(){
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $this->load->model('prodi_model', 'prodi');
        $this->load->model('dosen_model', 'dosen');
        $list_mahasiswa=$this->mahasiswa->getAll();
        $list_prodi = $this->prodi->getAll();
        $list_dosen=$this->dosen->getAll();
        $data ['list_mahasiswa'] = $list_mahasiswa;
        $data ['list_prodi'] = $list_prodi;
        $data ['list_dosen'] = $list_dosen;
        
        $this->load->view('dashboard/index',$data);
    }
}