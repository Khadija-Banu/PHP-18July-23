<?php
namespace PhpOopCrud;

use PDO;
use PDOException;

class DB{

    public $host = 'localhost';
    public $db_name = 'PHP-OOP-CRUD';
    public $db_user = 'root';
    public $db_pass = 'khadija203';
    public $pdo;


    public function __construct()
    {

        $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=UTF8";

        try {
            $pdoOBJ = new PDO($dsn, $this->db_user, $this->db_pass);

            if ($pdoOBJ) {
                $this->pdo = $pdoOBJ;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
  


?>