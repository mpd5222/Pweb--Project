<?php
class Daftarsekolah extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar sekolah';
        $data['background'] = 'background2.jpg';
        $data['Daftarsekolah'] = $this->model('Daftarsekolah_model')->getDaftarsekolah();
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('daftarsekolah/index', $data);
        $this->view('templates/footer');
    }
}