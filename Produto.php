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

    function getDescricao() : string {
        return $this->descricao;
    }
    function getEstoque() : int {
        return $this->estoque;
    }
    function getPreco() : int {
        return $this->preco;
    }
    function getFabricante() {
        return $this->fabricante;
    }

    function setFabricante(Fabricante $fabricante) {
        $this->fabricante = $fabricante;
    }
}