<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
class Categori extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Artikel';
        $data['AS'] = $this->model('Artikel_model')->getAllArtikel();
        $this->view('templates/blog', $data);
        $this->view('categori/index', $data);
        $this->view('templates/footer');
    }

    public function getAgama()
    {
        $data['judul'] = 'Artikel Agama';
        $data['AS'] = $this->model('Artikel_model')->Agama();
        $this->view('templates/blog', $data);
        $this->view('categori/index', $data);
        $this->view('templates/footer');
    }

    public function getPendi()
    {
        $data['judul'] = 'Artikel Pendidikan';
        $data['AS'] = $this->model('Artikel_model')->Pendidikan();
        $this->view('templates/blog', $data);
        $this->view('categori/index', $data);
        $this->view('templates/footer');
    }

    public function getSej()
    {
        $data['judul'] = 'Artikel Sejarah';
        $data['AS'] = $this->model('Artikel_model')->Sejarah();
        $this->view('templates/blog', $data);
        $this->view('categori/index', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        if ($this->model('Artikel_model')->tambahData($_POST) > 0) {
            Flasher::setflash('berhasil ', ' ditambahkan ', 'success');
            header('Location: ' . BASEURL . '/Artikel');
            exit;
        } else {
            Flasher::setflash('gagal', ' ditambahkan ', 'danger');
            header('Location: ' . BASEURL . '/Artikel');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Artikel_model')->hapusData($id) > 0) {
            Flasher::setflash('berhasil ', ' dihapus ', 'success');
            header('Location: ' . BASEURL . '/Artikel');
            exit;
        } else {
            Flasher::setflash('gagal', ' dihapus ', 'danger');
            header('Location: ' . BASEURL . '/Artikel');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Artikel_model')->getId($_POST['id']));
    }

    public function ubah()
    {
        try {
            //code...
            if ($this->model('Artikel_model')->ubahData($_POST) > 0) {
                Flasher::setflash('berhasil ', ' diUpdate ', 'success');
                header('Location: ' . BASEURL . '/Artikel');
                exit;
            } else {
                Flasher::setflash('gagal', ' diUpdate ', 'danger');
                header('Location: ' .   BASEURL . '/Artikel');
                exit;
            }
        } catch (Exception $th) {
            $th->getMessage();
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Artikel';
        $data['str'] = $this->model('Artikel_model')->cariArtikel();
        $this->view('templates/header', $data);
        $this->view('Artikel/index', $data);
        $this->view('templates/footer');
    }
}
