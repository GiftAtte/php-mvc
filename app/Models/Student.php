<?php
namespace App\Models;

use Core\Database;
use PDO;

class Student
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function all()
    {
        $statement = $this->db->prepare("SELECT * FROM students");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $statement = $this->db->prepare("SELECT * FROM students WHERE id = :id");
        $statement->execute(['id' => $id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $statement = $this->db->prepare("INSERT INTO students (firstname, email, lastname) VALUES (:firstname, :email, :lastname)");
        return $statement->execute($data);
    }

    public function update($id, $data)
    {
        $data['id'] = $id;
        $statement = $this->db->prepare("UPDATE students SET firstname = :firstname, email = :email, lastname = :lastname WHERE id = :id");
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = $this->db->prepare("DELETE FROM students WHERE id = :id");
        return $statement->execute(['id' => $id]);
    }
}
