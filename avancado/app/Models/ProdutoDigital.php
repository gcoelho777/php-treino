<?php 

namespace App\Models;

class ProdutoDigital extends Produto 
{
    private string $linkDownload;


    public function __construct(string $nome, float $preco, string $linkDownload) {
        parent::__construct($nome, $preco);
        $this->linkDownload = $linkDownload;
    }

    public function getDetalhes(): string
    {
        return parent::getDetalhes() . "<br>Link: {$this->linkDownload}";
    }

}