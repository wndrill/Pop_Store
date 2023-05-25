<?php

// Definir variáveis para BD

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';

//Cria uma variável para conexao.

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, 'test');


if (conexao -> connect_error)