<?php

namespace App\Services;

class FileService
{
    public static function writeLog(string $message): void 
    {
        $file = fopen('../public/uploads/log.txt', 'a');
        fwrite($file, $message . "\n");
    }

    public static function readLog(): array 
    {
        $logPath = "../public/uploads/log.txt";
        if(!file_exists($logPath)) {
            return ["O arquivo de log não existe"];
        }

        $lines = [];
        $file = fopen($logPath, "r");
        while(($line = fgets($file) !== false)) {
            $lines[] = $line;
        }
        fclose($file);
        
        return $lines;
    }

    public static function uploadFile(array $file): string
    {
        $uploadDir = '../public/uploads/';
        $extensao = pathinfo($file['name'], PATHINFO_EXTENSION);
        $novoNome = uniqid("file_", true) . "." . $extensao;
        var_dump($file);


        if(move_uploaded_file($file['tmp_name'], $uploadDir . $novoNome)) {
            return $novoNome;
        }

        throw new \Exception('Erro no upload do arquivo');
    }
}