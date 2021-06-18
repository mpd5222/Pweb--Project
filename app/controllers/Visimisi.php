<?php
class Visimisi extends Controller
{
    public function index()
    {
        $data['title'] = 'Visimisi';
        $data['background'] = 'background2.jpg';
        $this->view('templates/header', $data);
        $this->view('visimisi/index', $data);
        $this->view('templates/footer');
    }
}