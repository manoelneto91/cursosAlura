<?php

try {
    $pdo = new PDO('sqlite:banco.sqlite');
}catch(Exception $e){
    echo "Falha de conexão" . PHP_EOL;
}

$pdo->exec('CREATE TABLE STUDENTS (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT)');