<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Login';
        $data['as'] = $this->model('Sigup_model')->getAll();
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
        if ($this->model('Sigup_model')->sigup($_POST) > 0) {
            Flasher::setSigup('Berhasil ', ' Terimakasih ', 'success');
            header('Location: ' . BASEURL . '/Blog');
            exit;
        } else {
            Flasher::setSigup('Gagal', ' Terimakasi ', 'danger');
            header('Location: ' . BASEURL . '/Sigup');
            exit;
        }
    }


    public function masuk1()
    {
        if ($this->model('Login_model')->login($_POST) > 0) {
            Flasher::setLogin('Berhasil ', ' Terimakasih ', 'success');
            header('Location: ' . BASEURL . '/Blog');
            exit;
        } else {
            Flasher::setLogin(' Gagal   ', ' Dimohon Untuk Register Terlebih Dahulu ', 'danger');
            header('Location: ' . BASEURL . '/Login');
            exit;
        }
    }

    public function masukAdmin()
    {
        if ($this->model('Login_model')->loginAdmin($_POST) > 0) {
            Flasher::setLogin('Berhasil ', ' Terimakasih ', 'success');
            header('Location: ' . BASEURL . '/Blog');
            exit;
        } else {
            Flasher::setLogin(' Gagal   ', ' Dimohon Untuk Register Terlebih Dahulu ', 'danger');
            header('Location: ' . BASEURL . '/Login');
            exit;
        }
    }
}
