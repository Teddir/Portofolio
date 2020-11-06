<?php

class Sigup extends Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Sigup';
        $data['log'] = $this->model('Sigup_model')->getAll();
        $this->view('templates/sigup', $data);
        $this->view('sigup/index', $data);
        $this->view('templates/footer');
    }

    public function Login()
    {
        $data['judul'] = 'Halaman Sigup';
        $data['log'] = $this->model('Sigup_model')->getAll();
        $this->view('templates/login', $data);
        $this->view('sigup/index_2', $data);
        $this->view('templates/footer');
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/Home');
    }


    public function tambah()
    {
        if ($this->model('Sigup_model')->sigup($_POST) == 1) {
            Flasher::setSigup('Berhasil ', ' Terimakasih ', 'success');
            header('Location: ' . BASEURL . '/Login');
            exit;
        } else {
            Flasher::setSigup('Gagal', ' Terimakasi ', 'danger');
            header('Location: ' . BASEURL . '/Sigup');
            exit;
        }
    }

    public function masuk($data)
    {
        if ($this->model('Login_model')->login($_POST) > 0) {
            Flasher::setLogin('Berhasil ', ' Terimakasih ', 'success');
            header('Location: ' . BASEURL . '/Blog');
            exit;
        } else {
            Flasher::setLogin('Gagal', ' Terimakasi ', 'danger');
            header('Location: ' . BASEURL . '/Sigup');
            exit;
        }
    }

    public function tambah1()
    {
        if ($this->model('Artikel_model')->tambahData($_POST) > 0) {
            Flasher::setflash('berhasil ', ' ditambahkan ', 'success');
            header('Location: ' . BASEURL . '/Blog');
            exit;
        } else {
            Flasher::setflash('gagal', ' ditambahkan ', 'danger');
            header('Location: ' . BASEURL . '/Santri');
            exit;
        }
    }
}
