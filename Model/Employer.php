<?php 

    class Employer extends Model {
        
        public function __construct()
        {
            parent:: __construct();
            $this->setTableName('jobs');
        }

        public function createJob($data){
            $sql="INSERT INTO $this->tableName (employer_id, title, company, location, description, status) VALUES (:employer_id, :title, :company, :location, :description, :status )";
            $stmt=$this->conn->prepare($sql);
            $stmt->bindParam(':employer_id', $data['employer_id']);
            $stmt->bindParam(':title', $data['title']);
            $stmt->bindParam(':company', $data['company']);
            $stmt->bindParam(':location', $data['location']);
            $stmt->bindParam(':description', $data['description']);
            $stmt->bindParam(':status', $data['status']);
            $stmt->execute();
            return $data;
        }

        public function getJob(){
            $sql="SELECT id,employer_id, title, company, location, description, status  FROM  $this->tableName " ;
            $stmt=$this->conn->prepare($sql);
            $stmt->execute();
            $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
          }

          public function getCv($id){
            $sql = "SELECT users.user_name, cvs.title, cvs.upload, users.experience, users.degree FROM users 
                    INNER JOIN cvs ON  users.id= cvs.user_id 
                    INNER JOIN candidate ON  users.id =  candidate.user_id
                    WHERE candidate.employer_id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function searchCv($data){
            $sql=  $sql = "SELECT cvs.title, skills.name_skill, skills.level, cvs.upload FROM users 
            INNER JOIN cvs ON  users.id= cvs.user_id 
            INNER JOIN skills ON  users.id =  skills.user_id
            WHERE cvs.title LIKE :title AND skills.name_skill LIKE :name_skill AND skills.level LIKE :level ";
            $stmt = $this->conn->prepare($sql);
            $title = '%' . $data['title'] . '%';
            $name_skill = '%' . $data['name_skill'] . '%';
            $level = '%' . $data['level'] . '%';
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':name_skill',$name_skill);
            $stmt->bindParam(':level',$level);
            $stmt->execute();
            $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function insertMoney($data){
            // var_dump($data);die();
            $sql="UPDATE transactions SET amount = amount + :amount WHERE user_id = :user_id ";
            $stmt=$this->conn->prepare($sql);
            $stmt->bindParam(':user_id', $data['user_id']);
            $stmt->bindParam(':amount', $data['amount']);
            $stmt->execute();
            return $data;
        }      
        
        public function getAmount($id)
        {
            $sql = "SELECT * FROM transactions  WHERE user_id = :user_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user_id', $id);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function deduction($id){
            $sql="UPDATE transactions SET amount = amount - 10000 WHERE user_id = :user_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user_id', $id);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

    }