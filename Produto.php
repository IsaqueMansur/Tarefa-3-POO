<?php
class Produto {
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;

    function __construct($descricao, $estoque, $preco) {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    function getDescricao() {
        return $this->descricao;
    }
    function getEstoque() {
        return $this->estoque;
    }
    function getPreco() {
        return $this->preco;
    }
    function getFabricante() {
        return $this->fabricante;
    }

    function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }
}