<?php
class Berita extends Controller
{
    public function index()
    {
        $data['title'] = 'Berita';
        $data['background'] = 'background2.jpg';
        $data['berita'] = $this->model('Berita_model')->getBerita();
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('Berita/index', $data);
        $this->view('templates/footer');
    }
}