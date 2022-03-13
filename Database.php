<?php 
class DB{
    private $dsn;
    private $username;
    private $password;
    private $database;
    private $pdo;
    
    function __construct()
    {
        $this-> database =  "coding-academy";
        $this-> dsn ="mysql:host=localhost;dbname=$this->database;charset=u";   
        $this->username="root";
        $this->password="";
        $this->pdo =new PDO($this->dsn,$this->username, $this->password);
        
    }     
    function select($table,$id){
        $stmt=$this->pdo->prepare("select * from $table where id=?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }   
}