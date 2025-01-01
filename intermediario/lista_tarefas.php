<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Adicionar Tarefa</h1>

    <form action="adicionar_tarefa.php" method="POST">
        Titulo: <input type="text" name="titulo" required><br>
        Descrição: <textarea name="descricao" required></textarea>
        <button type="submit">Adicionar</button>
    </form>



    <h1>Minhas Tarefas</h1>
    <?php
        $pdo = new PDO('pgsql:host=localhost;dbname=tarefas', 'usuario_tarefas', 'postgres');
        $stmt = $pdo->query("SELECT * FROM tarefas");

        while($tarefa = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div>";
            echo "<h3>{$tarefa['titulo']}</h3>";
            echo "<p>{$tarefa['descricao']}</p>";
            echo $tarefa['concluida'] ? "<p><strong>Concluida</strong></p>" : "<p><strong>Pendente</strong></p>";
            echo "<a href='editar_tarefas.php?id=$tarefa[id]'>Editar</a>";
            echo "</div><hr>";
        }
    ?>
</body>
</html>