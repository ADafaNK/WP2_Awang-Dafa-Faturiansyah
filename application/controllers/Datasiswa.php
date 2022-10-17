<?php
class Matakuliah extends CI_Controller{
    public function index(){
        $this->load->view('view-form-siswa');
    }
    public function cetak(){
        $this->form_validation->set_rules('nama', 'Nama Siswa', '');
    }
}