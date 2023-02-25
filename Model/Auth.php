<?php 
    require_once "Model.php";

    class Auth extends Model {

        public function __construct()
        {   parent::__construct();
            $this->setTableName('users');
        }

          public function createAccount($data){
            $sql="INSERT INTO $this->tableName (email, password, role) VALUES (:email, :password, :role)";
            $stmt=$this->conn->prepare($sql);
        
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':password', $data['password']);
            $stmt->bindParam(':role', $data['select']);
            $stmt->execute();
            return $data;
        }

        public function firstUser($data)
        {   
            $sql = "SELECT * FROM $this->tableName WHERE email = :email AND password= :password AND role = 1 ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':password', $data['password']);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        public function firstEmploy($data)
        {   
            $sql = "SELECT * FROM $this->tableName WHERE email = :email AND password= :password AND role = 2 ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':password', $data['password']);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

    }