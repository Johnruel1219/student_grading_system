<?php

use Areja\Gs\Models\StudentModel;
use Areja\Gs\Core\Database;


require 'vendor/autoload.php';

$student = new StudentModel;

$student->id = 2345;
$student->name = "areja";
$student->year_level = 2;
$student->section = "D";
$student->course = "BSIT";

$listofStudents = $student->read();

print_r($listofStudents);