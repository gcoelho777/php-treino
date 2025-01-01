<?php 

namespace App\Models;

class Produto 
{
    private string  $nome;
    private float $preco;

    public function __construct(string $nome, float $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getDetalhes(): string
    {
        return "Produto: {$this->nome}, Preço: R$ {$this->preco}";
    }

}