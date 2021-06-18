<?php
class About extends Controller
{
    public function index($nama = 'MAHFUD', $pekerjaan = 'mahasiswa', $umur = 22)
    {
        $data['nama'] = $nama;
        $data['background'] = 'background2.jpg';
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['title'] = 'Pages';
        $data['background'] = 'background2.jpg';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
