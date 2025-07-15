<?php

include '../vendor/autoload.php';

use Alipat\StudentManagement\Model\StudentModel;

$student = new StudentModel;
$student->id = 2002110101;
$student->fullname = "Chavez James";
$student->yearlevel = "First Year";
$student->course = "BSIT";
$student->section = "A";

$student->displayInfo();