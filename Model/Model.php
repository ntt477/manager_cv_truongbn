<?php
require_once "DbConnect.php";

class Model extends Connection
{
    protected $tableName;

    public function __construct()
    {
        parent::__construct();
    }

    public function setTableName($table)
    {
        $this->tableName = $table;
    }

    public function create($data)
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        try {
            $sql = "INSERT INTO $this->tableName ($columns) VALUES ($placeholders)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);
            return $this->conn->lastInsertId();
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function find($id)
    {
        $sql = "SELECT id  FROM users  WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $id);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getAll($id)
    {
        $sql = "SELECT * FROM $this->tableName  WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->tableName WHERE id = $id";
        $stmt = $this->conn->query($sql);
        if ($stmt) {
            return true;
        }

        return false;
    }

    
}
