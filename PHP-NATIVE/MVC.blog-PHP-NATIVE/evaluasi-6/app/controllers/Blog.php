<?php

class Blog extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Artikel';
        $data['ls'] = $this->model('Artikel_model')->getAllArtikel();
        $this->view('templates/blog', $data);
        $this->view('Artikel/indexp', $data);
        $this->view('templates/footer');
    }

    public function Login()
    {
        $data['judul'] = 'Halaman Login';
        $data['ls'] = $this->model('Sigup_model')->getAll();
        $this->view('templates/blog', $data);
        $this->view('Artikel/indexp', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Artikel';
        $data['ls'] = $this->model('Artikel_model')->getId($id);
        $this->view('templates/blog', $data);
        $this->view('Artikel/blog', $data);
        $this->view('templates/footer');
    }


    public function tambah1()
    {
        if ($this->model('Sigup_model')->login($_POST) > 0) {
            Flasher::setLogin('Berhasil ', ' Terimakasih ', 'success');
            header('Location: ' . BASEURL . '/Blog/tambah');
            exit;
        } else {
            Flasher::setLogin('Gagal', ' Terimakasi ', 'danger');
            header('Location: ' . BASEURL . '/Blog');
            exit;
        }
    }
}
