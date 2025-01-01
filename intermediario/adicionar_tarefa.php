<?php 

$pdo = new PDO("pgsql:host=localhost;dbname=tarefas", 'usuario_tarefas', 'postgres');


$titulo = filter_input(INPUT_POST,'titulo', FILTER_SANITIZE_STRING);
$descricao = filter_input(  INPUT_POST,'descricao', FILTER_SANITIZE_STRING);

if($titulo && $descricao) {
    $stmt = $pdo->prepare("INSERT INTO tarefas (titulo, descricao) VALUES (:titulo, :descricao)");
    $stmt->execute(["titulo"=> $titulo,"descricao"=> $descricao]);
    header("Location: lista_tarefas.php");
} else {
    echo "Erro: dados inválidos.";
}