<?php

namespace Areja\Gs\Models;

use Areja\Gs\Core\Crud;
use Areja\Gs\Core\Database;

class StudentModel extends Database implements Crud {

    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;

    public function __construct()
    {
        parent:: __construct();
        $this->id = 0;
        $this->name = "";
        $this->course = "";
        $this->year_level = 0;
        $this->section = "";
    }
    public function find($id) {

    }
    public function create(){
        //create data
        $query = $this->conn->prepare("INSERT INTO `student`(`id`, `name`, `year_level`, `section`, `course`) 
        VALUES ('$this->id','$this->name','$this->year_level','$this->section','$this->course')");
        if($query->execute()){
            echo "Inserted";
        }
    }
    public function read(){ try {
        $sql = "SELECT * FROM student";
    $results = $this->conn->query($sql);
    return $results->fetch_all(MYSQLI_ASSOC);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }

    }
    public function update($id) { 
        $this->id=$id;
        $query = $this->conn->prepare("UPDATE `student` SET id='$this->id',name='$this->name',course='$this->course',year_level='$this->year_level',section='$this->section' WHERE id = $id");
       if ($query->execute()){ 
       echo "Student Updated Succesfully!";
       }
    }
    public function delete($id) {
        $this->id=$id;

        $sql = "DELETE FROM `student` WHERE ID = $this->id";
        if ($this->conn->query($sql)) {
       echo "Student Deleted Successfully!";
     } else {
        echo "Failed". $this->conn->error;
     }
    }
}
?>