<?php
class connectPdo
{
    public function __construct()
    {
        $host = "localhost";
        $user = "Teddir";
        $password = "Gempar123";
        $dbname = "login";

        $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    }
    
    public function insertData($nama, $password)
    {
        $query = "SELECT name, password FROM login1 WHERE name='$nama' && password=$password";
        $tampil = $this->conn->prepare($query);
        $tampil->execute();

        if ($hasil = $tampil->fetchAll(PDO::FETCH_ASSOC)){;
        
            echo "<script>
            alert('User Telah Terdaftar');
            document.location.href='2.php'
        </script>";
        return false;
        }

        $password = password_hash($pass, PASSWORD_DEFAULT);
        $query = "INSERT INTO login1 (name, password) VALUES (?,?)";

        $tambah = $this->conn->prepare($query);

        // masukkan variabel
        $tambah->bindParam(1, $nama);
        $tambah->bindParam(2, $password);

        $tambah->execute();

        return $tambah->rowCount();

    }

    public function tampilData($tabel)
    {
        $password_has = password_hash($pass, PASSWORD_DEFAULT);
        $query = "SELECT * FROM $tabel";

        $tampil = $this->conn->prepare($query);
        $tampil->execute();

        $hasil = $tampil->fetchAll(PDO::FETCH_ASSOC);
        return $hasil;
    }
}