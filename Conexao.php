<?php

$conexao = mysqli_connect("localhost", "aluno", "1234", "curso_php_25");

// só entra aqui se deu erro ao conectar com o banco.
if (!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
