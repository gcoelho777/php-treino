<?php 

session_start();

$credenciais = [
    'admin' => '1234',
    'gabriel' => 'senha123'
];

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(isset($credenciais[$usuario]) && $credenciais[$usuario] === $senha) {
    $_SESSION['usuario'] = $usuario;
    echo "Bem-vindo, $usuario!<br>";
    echo "<a href='logout.php'>Sair</a>";

} else {
    echo "Credenciais Inválidas";
} 

