<?php 

namespace App\Controllers;

use App\Models\Produto;
use App\Models\ProdutoDigital;

class ProdutoController 
{
    public function listarProdutos(): void 
    {
        $produto1 = new Produto("Livro Fisico", 50.00);
        $produto2 = new ProdutoDigital("E-Book", 100.00, "https://www.gooogle.com.br");

        echo $produto1 ->getDetalhes();
        echo "<br>";
        echo $produto2->getDetalhes();
    }
}