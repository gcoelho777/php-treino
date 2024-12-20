<?php 

$nome = htmlspecialchars($_POST['nome'] ?? '', ENT_QUOTES, 'UTF-8');
$mensagem = htmlspecialchars($_POST['mensagem'] ??'', ENT_QUOTES, 'UTF-8');
$email = filter_var($_POST['email'] ??'',FILTER_VALIDATE_EMAIL);

$usuario = $_SESSION['usuario'];

echo "eai $usuario";

if(!$nome || !$email || !$mensagem) {
    die("Entradas inválidas.");
}

if(isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == 0) {
    $diretorioUpload = 'uploads';
    if(!is_dir($diretorioUpload)) {
        mkdir($diretorioUpload,0777, true);    
    }
    $nomeArquivo = basename($_FILES['arquivo']['name']);
    $caminhoCompleto = $diretorioUpload . "/" . $nomeArquivo;


    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminhoCompleto)) {
        echo "Arquivo enviado com sucesso para $caminhoCompleto.<br>";
    } else {
        echo "Erro no upload do arquivo.<br>";
    }
}