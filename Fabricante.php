<?php
class Fabricante {
    private string $nome;
    private string $endereco;
    private string $documento;

    function __construct($nome, $endereco, $documento) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->documento = $documento;
    }

    function getNome() {
        return $this->nome;
    }
    function getEndereco() {
        return $this->endereco;
    }
    function getDocumento() {
        return $this->documento;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    function setDocumento($documento) {
        $this->documento = $documento;
    }
}