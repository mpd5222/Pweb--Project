<?php
class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home'; 
        $data['background'] = 'background1.jpg';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
