<?php 

namespace App\Controllers;

use App\Services\FileService;
use Exception;

class ArquivoController 
{
    public function salvarLog(): void
    {
        FileService::writeLog("Log criado em: " . date("Y-m-d H:i:s"));
        echo "Log salvo com sucesso!";
    }

    public function exibirLog(): void
    {
        $logs = FileService::readLog();
        foreach($logs as $log) {
            echo $log . "<br>";
        }
    }

    public function enviarArquivo(): void
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['arquivo'])) {
            try {
                $nomeArquivo = FileService::uploadFile($_FILES['arquivo']);
                echo "Upload finalizado com sucesso! Arquivo: $nomeArquivo";
            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }
    }
}