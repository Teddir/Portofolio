<?php


class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $dbname = DB_NAME;
    private $password = DB_PASS;


    private $dbh; //database handler
    private $stmt;


    public function __construct()
    { {
            //dta source name
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $option =
                [
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ];

            try {
                $this->dbh = new PDO($dsn, $this->user, $this->password, $option);
            } catch (PDOException $th) {
                $th->getMessage();
            }
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($params, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value);
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value);
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value);
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($params, $value, $type);
    }

    public function exe()
    {
        $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->exe();
        return  $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->exe();
        return  $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
