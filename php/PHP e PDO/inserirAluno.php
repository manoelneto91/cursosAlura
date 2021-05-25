<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . 'banco.sqlite';

try {
    $pdo = new PDO('sqlite:banco.sqlite');
}catch(Exception $e){
    echo "Falha de conexão" . PHP_EOL;
}

$student = new Student(null, 'Manoel', new \DateTimeImmutable('1991-07-10'));

$sqlInsert = "INSERT INTO students(name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()}')";

echo $sqlInsert;