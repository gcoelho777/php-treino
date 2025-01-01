<?php 

use App\Controllers\ArquivoController;

require __DIR__ . "/../vendor/autoload.php";

// use App\Controllers\ProdutoController;

// $controller = new ProdutoController();
// $controller->listarProdutos();

$controller = new ArquivoController();

if(isset($_GET['action'])) {
    switch($_GET['action']) {
        case 'salvarLog':
            $controller->salvarLog();
            break;
        case 'exibirLogs':
            $controller->exibirLog();
            break;
        case 'uploadArquivo':
            $controller->enviarArquivo();
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de arquivos</title>
</head>
<body>
    <h1>Gerenciamento de Arquivos</h1>
<form action="?action=uploadArquivo" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo" required>
    <button type="submit">Enviar arquivo</button>
    <br>
    <a href="?action=salvarLog">Salvar log</a>
    <br>
    <a href="?action=exibirLogs">Exibir Logs</a>
</form>

</body>
</html>