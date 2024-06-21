<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController
{
    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function index()
    {
        $students = $this->student->all();
        include_once "../app/Views/students/index.php";
    }

    public function create()
    {
        include_once "../app/Views/students/create.php";
    }

    public function store()
    {
        $data = [
            'firstname' => $_POST['firstname'],
            'email' => $_POST['email'],
            'lastname' => $_POST['lastname']
        ];
        $this->student->create($data);
        header('Location: /students');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $student = $this->student->find($id);
        include_once "../app/Views/students/edit.php";
    }

    public function update()
    {
        $id = $_POST['id'];
        $data = [
            'firstname' => $_POST['firstname'],
            'email' => $_POST['email'],
            'lastname' => $_POST['lastname']
        ];
        $this->student->update($id, $data);
        header('Location: /students');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->student->delete($id);
        header('Location: /students');
    }
}
