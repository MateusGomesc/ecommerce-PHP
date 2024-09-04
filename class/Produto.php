<?php

class Produto{
    private int $codigo;
    private string $nome;
    private float $valor;

    public function __construct($codigo, $nome, $valor){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    
    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function imprimir(){
        echo "
            <table>
                <tr>
                    <td>Código</td>
                    <td>" . $this->codigo . "</td>
                </tr>
                <tr>
                    <td>Nome</td>
                    <td>" . $this->nome . "</td>
                </tr>
                <tr>
                    <td>Valor</td>
                    <td>" . $this->valor . "</td>
                </tr>
            </table>
        ";
    }
}