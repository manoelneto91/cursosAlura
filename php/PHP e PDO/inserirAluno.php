<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo  = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();
$student = new Student(null, 'Duda', new \DateTimeImmutable('1999-07-10'));

$sqlInsert = "INSERT INTO students(name, birth_date) VALUES (:name , :birth_date);";

$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name',$student->name());
$statement->bindValue(':birth_date',$student->birthDate()->format('Y-m-d'));

if ($statement->execute()){
    echo "Aluno Adicionado!!!!";
}