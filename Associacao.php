<?php 
require_once('Fabricante.php');
require_once('Produto.php');


$Acer = new Fabricante('Acer', 'Acrelandia, rua Dino, numero 710 - Acre', '16511930000140');
$Notebook = new Produto('Aspire', 50, 4000);

echo 'A descrição do produto é ' . $Notebook->getDescricao() . ' e seu fabricante é ' . $Acer->getNome();