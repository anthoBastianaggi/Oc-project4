<?php
class Database {

    private $db;

    public function __construct($login, $password, $database_name, $host = 'localhost'){
        $this->db = new PDO("mysql:dbname=$database_name;host=$host", $login, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    /**
     * @param $query
     * @param bool|array $params
     * @return PDOStatement
     */
    public function query($query, $params = false){
        if($params){
            $req = $this->db->prepare($query);
            $req->execute($params);
        }else{
            $req = $this->db->query($query);
        }
        return $req;
    }

    public function lastInsertId() {
        return $this->db->lastInsertId();
    }
}