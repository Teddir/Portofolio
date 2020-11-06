<?php

class Artikel_model
{
    private $db;
    private $table = 'artikel';

    public function __Construct()
    {
        $this->db = new Database;
    }

    public function getAllArtikel()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getId($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }


    public function Agama()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kategori=:kategori');
        $this->db->bind('kategori', 'Agama');
        $this->db->exe();
        return $this->db->resultSet();
    }

    public function Pendidikan()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kategori=:kategori');
        $this->db->bind('kategori', 'Pendidikan');
        $this->db->exe();
        return $this->db->resultSet();
    }

    public function Sejarah()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kategori=:kategori');
        $this->db->bind('kategori', 'Sejarah');
        $this->db->exe();
        return $this->db->resultSet();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO artikel VALUES (NULL, :image, :judulArtikel, :artikel, :tanggal, :kategori)";

        $this->db->query($query);
        $this->db->bind('image', $data['image']);
        $this->db->bind('judulArtikel', $data['judulArtikel']);
        $this->db->bind('artikel', $data['artikel']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('kategori', $data['kategori']);

        $this->db->exe();

        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM artikel WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->exe();

        return $this->db->rowCount();
    }

    public function ubahData($data)
    {
        $query = "UPDATE artikel SET 
                        image = :image, 
                        judulArtikel = :judulArtikel, 
                        artikel = :artikel, 
                        tanggal= :tanggal, 
                        kategori= :kategori 
                        WHERE id= :id";

        $this->db->query($query);
        $this->db->bind('image', $data['image']);
        $this->db->bind('judulArtikel', $data['judulArtikel']);
        $this->db->bind('artikel', $data['artikel']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('id', $data['id']);

        $this->db->exe();
        var_dump(($data));
        return $this->db->rowCount();
    }

    public function cariArtikel()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM artikel WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
ini_set('display_errors', 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
