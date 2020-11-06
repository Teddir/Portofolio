<?php

class Login_model
{
    private $db;
    public function __Construct()
    {
        $this->db = new Database;
    }
    public function getAll()
    {
        $this->db->query('SELECT * FROM user');
        return $this->db->resultSet();
    }

    public function getId($id)
    {
        $this->db->query('SELECT * FROM artikel WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function login($data)
    {
        $query = "SELECT * FROM user WHERE name=:name && password=:password";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('password', $data['password']);

        $this->db->exe();

        if ($hasil =  $this->db->rowCount()) {
            $_SESSION['user'] = [
                'name' => $data['name'],
                'status' => 'Logged In'
            ];
            return  1;
        }
        return 0;
    }

    public function loginAdmin($id)
    {
        $this->db->query('SELECT * FROM  login1  WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
