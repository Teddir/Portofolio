<?php
class connectPdo
{
    protected$host = "Localhost",
            $user = "Teddir",
            $password = "Gempar123",
            $dbname = "login";
    
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
        } catch (PDOxception $th) {
            $th->getMessage();
        }
    }

    public function login($username, $password)
    {
        $query = "SELECT * FROM user WHERE username= '$username'";
        $cek = $this->conn->query($query);
        $result = $cek->fetchAll(PDO::FETCH_OBJ);
        if (!$result) {
            return [
                "status" => "error",
                "msg" => "Username error"
            ];
        }
        $query = "SELECT * FROM user WHERE username= '$username' && password= '$password'";
        $cek = $this->conn->query($query);
        $result = $cek->fetchAll(PDO::FETCH_OBJ);
        if (!$result) {
            return [
                "status" => "error",
                "msg" => "Password error"
            ];
        }
        echo "sasa";
        return [
            "status" => "Succes",
            "msg" => "Login SUcces"
        ];

    }
}
?>