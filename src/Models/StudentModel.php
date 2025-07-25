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
        $query = $this->conn->prepare("INSERT INTO `srudent`(`id`, `name`, `year_level`, `section`, `course`) 
        VALUES ('$this->id','$this->name','$this->year_level','$this->section','$this->course')");
    
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
        $query = $this->conn->prepare("UPDATE `student` SET id='$this->id',name='$this->name',course='$this->course',yearl_level='$this->year_level',section='$this->section' WHERE id = $id");
       if ($query->execute()){ 
       echo "Student Updated Succesfully!";
       }
    }
    public function delete($id) {
        $query = $this->conn->prepare("DELETE FROM `student` WHERE $id");
       if ($query->execute()){ 
       echo "Student Deleted Successfully!";
     }
    }
}
?>