<?php

// use LDAP\Result;

class Database{

    // public $que;
    private $servername = "127.0.0.1";
    private $password = "";
    private $user = "root";
    private $dbname = "gestcontact";
    private $result = Array();
    public $connexion = "";

    public function __construct()
    {   
        try {
            $dsn = "mysql:host=$this->servername;dbname=$this->dbname;charset=UTF8";
            $this->connexion = new PDO($dsn, $this->user, $this->password);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // public function __sleep()
    // {
    //     return array('connection');
    // }

    // public function __wakeup()
    // {
    //     $this->connection;
    // }

    public function insert($table,$para=array()){
        $table_columns = implode(',', array_keys($para));
        $table_value = implode("','", $para);

        $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";
        
        try {
            $this->connexion->query($sql);
            return $this->connexion->lastInsertId();
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function update($table,$para=array(),$id){
        $args = array();

        foreach ($para as $key => $value) {
            $args[] = "$key = '$value'"; 
        }

        $sql="UPDATE  $table SET " . implode(',', $args);

        $sql .=" WHERE Id = $id";

        try{
            $this->connexion->query($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function delete($table,$id){
        $sql="DELETE FROM $table";
        $sql .=" WHERE $id ";
        $sql;

        try {
            $this->connexion->query($sql);
            echo "has deleted";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public $data;

    public function select($table,$rows="*",$where = null){
        if ($where != null) {
            $sql="SELECT $rows FROM $table WHERE $where";
        }else{
            $sql="SELECT $rows FROM $table";
        }

        try{
            $this->result =  $this->connexion->query($sql);
            $this->data = $this->result->fetchAll();
            // var_dump($this->sql);
            return $this->data;
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

}

// $db = new Database();

// $db->select("user","*");
// $db->delete('user',"id=1");
// $db->update('user',['Username'=>"Khalid",'Password'=>"2423532"],"id=1");
// $db->insert('user',['Username'=>"Ahmed",'Password'=>"232323",'SignUpDate'=>"02/02/2022"]);



