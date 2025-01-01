<?php 

$pdo = new PDO("pgsql:host=localhost;dbname=tarefas", 'usuario_tarefas', 'postgres');

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

try {
    $stmt = $pdo->prepare("UPDATE tarefas SET titulo = :titulo, descricao = :descricao WHERE id = :id");

    $stmt->execute(["titulo" => $titulo, "descricao" => $descricao, "id" => $id]);
    echo "Tarefa Atualizada com sucesso";
} catch (PDOException $e) {
    echo "Erro ao atualizar tarefa: " . $e->getMessage();
}