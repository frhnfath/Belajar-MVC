<?php

class About extends Controller {
    public function index($nama = 'Farhan', $pekerjaan = 'Mahasiswa', $umur = 20, $judul = 'About') {
        $this->view('templates/header');
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = $judul;
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() {
        $data['judul'] = 'About Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}