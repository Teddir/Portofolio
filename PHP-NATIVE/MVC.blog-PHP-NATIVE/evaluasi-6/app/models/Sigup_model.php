<?php

class Sigup_model
{
    public function __Construct()
    {
        $this->db = new Database;
    }
    public function getAll()
    {
        $this->db->query('SELECT * FROM user');
        return $this->db->resultSet();
    }

    public function sigup($data)
    {
        $query = "SELECT * FROM user WHERE name=:name && password=:password";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('password', $data['password']);
        // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->db->exe();

        if ($hasil =  $this->db->rowCount()) {
            echo "<script>
            alert('User Telah Terdaftar');
            document.location.href='signup.php'
        </script>";
            return false;
        }

        $query = "INSERT INTO user VALUES (NULL, :name, :password)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('password', $data['password']);

        $this->db->exe();

        return $this->db->rowCount();
    }
}
