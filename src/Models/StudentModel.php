<?php

namespace Areja\Gs\Models;

use Areja\Gs\Core\Crud;

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
        //$query = $this->conn->prepare("INSERT INTO `srudent`(`id`, `name`, `year_level`, `section`, `course`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')");
    
    }
    public function read(){ try {
        $sql = "SELECT * FROM student";
    $results = $this->conn->query($sql);
    return $results->fetch_all(MYSQLI_ASSOC);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }

    }
    public function update(){

    }
    public function delete(){
        
    }
}