<?php

use Areja\Gs\Models\StudentModel;
use Areja\Gs\Core\Database;


require 'vendor/autoload.php';

$student = new StudentModel;

$shabu = $student->read();

print_r($shabu);