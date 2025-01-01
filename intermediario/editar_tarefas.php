<?php 
        $pdo= new PDO ("pgsql:host=localhost;dbname=tarefas", 'usuario_tarefas', 'postgres');

        $id = $_GET['id'];

        $stmt = $pdo->prepare("SELECT * FROM tarefas where id = :id");
        $stmt->execute(["id"=> $id]);
        $tarefa = $stmt->fetch(PDO::FETCH_ASSOC);

        var_dump($tarefa);
        
        if(!$tarefa) {
            echo "A tarefa não existe";
            exit;
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editar_tarefa.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($tarefa['id']) ?>">
        <input type="text" name="titulo" placeholder="Novo Titulo" value="<?= htmlspecialchars($tarefa['titulo']) ?>" required>
        <textarea name="descricao" placeholder="Nova descrição" required><?= $tarefa['descricao'] ?></textarea>
        <button type="submit">Atualizar Tarefa</button>
    </form>    

    
</body>
</html>