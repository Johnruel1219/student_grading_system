<?php

use Areja\Gs\Models\StudentModel;
use Areja\Gs\Core\Database;


require 'vendor/autoload.php';

$student = new StudentModel;

$student->id = 2;
$student->name = "John";
$student->year_level = 2;
$student->section = "D";
$student->course = "BSIT";

//$listofStudents = $student->read();
//print_r($listofStudents);


$student->create();
//$student->read();
//$student->update(20246241411);
//$student->delete(1);