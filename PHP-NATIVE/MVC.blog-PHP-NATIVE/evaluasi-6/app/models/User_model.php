<?php

class User_model
{
    private $db;
    private $table = 'artikel';
    private $table1 = 'login1';
    private $table2 = 'user';

    public function __Construct()
    {
        $this->db = new Database;
    }

    public function getAllCrud()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table1);
        return $this->db->resultSet();
    }

    public function getAdmin()
    {
        $this->db->query('SELECT * FROM ' . $this->table2);
        return $this->db->resultSet();
    }


    public function getUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table1);
        return $this->db->resultSet();
    }

    public function getIdUser($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table1 . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
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

        return $this->db->rowCount();
    }
}
