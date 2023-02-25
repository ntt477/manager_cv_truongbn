<?php

class User extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->setTableName('users');
    }

    public function getInfor($email)
    {
        $sql = "SELECT user_name, email, phone_number, degree, experience  FROM  $this->tableName  WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getInformation()
    {
        $sql = "SELECT id, user_name, email, phone_number,role, degree, experience  FROM  $this->tableName";
        $stmt = $this->conn->query($sql);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function update($id, $data)
    {
        $sql = "UPDATE $this->tableName  SET user_name= :user_name, phone_number= :phone_number, degree= :degree, experience= :experience  WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':user_name', $data['user_name']);
        $stmt->bindParam(':phone_number', $data['phone_number']);
        $stmt->bindParam(':degree', $data['degree']);
        $stmt->bindParam(':experience', $data['experience']);
        $stmt->execute();
    }

    public function updateInfor($id, $data)
    {
        $sql = "UPDATE $this->tableName
            SET user_name = :user_name, email = :email, phone_number = :phone_number, 
                degree = :degree, experience = :experience 
            WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':user_name', $data['0']);
        $stmt->bindParam(':email', $data['1']);
        $stmt->bindParam(':phone_number', $data['2']);
        $stmt->bindParam(':degree', $data['3']);
        $stmt->bindParam(':experience', $data['4']);
        $stmt->execute();
    }

    public function updateSkill($data)
    {
        // $sql= "UPDATE skills SET user_id = :user_id, name_skill = :name_skill, level = :level";
        $sql = "INSERT INTO skills(user_id,name_skill,level) VALUES(:user_id, :name_skill, :level)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $data['0']);
        $stmt->bindParam(':name_skill', $data['1']);
        $stmt->bindParam(':level', $data['2']);
        $stmt->execute();
    }



    public function updateFile($data)
    {
        $sql = "INSERT INTO cvs(user_id,title,upload) VALUES(:user_id, :title, :upload)";
        // $sql= "UPDATE cvs SET user_id = :user_id, title = :title, upload = :upload";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $data['0']);
        $stmt->bindParam(':title', $data['1']);
        $stmt->bindParam(':upload', $data['2']);
        $stmt->execute();
    }

    public function getCv($id)
    {
        $sql = "SELECT * FROM cvs WHERE user_id= :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function createCandidate($data)
    {
        $sql = "INSERT INTO candidate(user_id, employer_id) VALUES (:user_id, :employer_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $data['id']);
        $stmt->bindParam(':employer_id', $data['employer_id']);
        $stmt->execute();
    }

    public function updateStatusCv($id)
    {
        /// reset trạng thái của cv từ 1 về 0
        $sql = "UPDATE cvs SET status = 0 WHERE status = 1 AND id != :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        //update trạng thái 0 về 1
        $sql = "UPDATE cvs SET status = 1 WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function searchJob($data){
        $sql = "SELECT * FROM jobs WHERE title LIKE :title ";
        $stmt = $this->conn->prepare($sql);
        $title = '%' . $data['title'] . '%';
        $stmt->bindParam(':title',$title);
        $stmt->execute();
        $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function createNewUser($data){
        $sql= "INSERT INTO users(email, password, role ) VALUES (:email ,:password,:role )";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':role', $data['role']);
        $stmt->execute();
    }

}
