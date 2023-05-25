<?php


// Definir variáveis para BD

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];


// Conexão com o Banco de Dados

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';

//Cria uma variável para conexao.

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, 'test');

//Condição para caso a $conexao mostre um erro.

if($conexao->errno){

    header("Location:cadastro.php");
}

//Inserir os dados na Tabela.
$result = "INSERT INTO usuarios(nome, email, senha) VALUES ('".$usuario."', '".$email."', '".$senha."' )";

$new = $conexao->query($result);

if (!$new){
    echo "<p>Houve um erro</p>";
}
else{


    
}
