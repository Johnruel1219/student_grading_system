<?php

use Areja\Gs\Models\StudentModel;
use Areja\Gs\Core\Database;


require 'vendor/autoload.php';

$studen = new StudentModel;

$listofStudents = $student->read();

print_r($listofStudent);