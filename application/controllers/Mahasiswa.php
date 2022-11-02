<?php

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        // wajib untuk memanggil function constructor
        parent::__construct();
        // $this->load->database(); // agar function lain dapat memanggilnya dihalaman ini
        // jika mau dipakai keseluruhan bisa masik ke config > autoload > autoload['libraries'] = array('database')
        $this->load->model('Mahasiswa_model'); // sekarang isinya array
    }

    public function index()
    {
        // $this->load->database();
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['judul'] = 'Halaman Mahasiswa';
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman Tambah Mahasiswa';
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/tambah', $data);
        $this->load->view('templates/footer');
    }
}