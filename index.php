<?php
declare(strict_types=1);

require_once __DIR__ . '.\autoload.php';
Autoload::initial();

use Objects\Humans\Student as Student;
use Objects\Techs\Transport\Vehicle as Vehicle;
use Objects\Techs\Display as Display;

$student = new Student('Аркадий', 'Иванов', 20);
echo $student->getName();
echo $student->setGPA(4.7);
echo PHP_EOL;
echo $student->getGPA();
echo PHP_EOL;

$car_exeed = new Vehicle('Авто', 'Exeed', 'TXL', 2021, 'Black');
echo $car_exeed->setMileage(22560);
echo $car_exeed->printPassport();
echo PHP_EOL;

$display = new Display('TV', 'LG', '55FHD', '1920x1028');
echo $display->useDisplay();
echo $display->statusDisplay();
echo PHP_EOL;
