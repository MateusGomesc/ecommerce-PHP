<?php

require_once "Pessoa.php";

class Vendedor extends Pessoa{
    private float $salario;
    private float $comissao;

    public function __construct($nome, $cpf, $sexo, $dia, $mes, $ano, $salario, $comissao){
        parent::__construct($nome, $cpf, $sexo, $dia, $mes, $ano);
        $this->salario = $salario;
        $this->comissao = $comissao;
    }
    
    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getComissao(){
        return $this->comissao;
    }

    public function setComissao($comissao){
        $this->comissao = $comissao;
    }

    public function imprimir(){
        echo "
            <table>
                " . parent::imprimir() . "
                <tr>
                    <td>Salário</td>
                    <td>" . $this->salario . "</td>
                </tr>
                <tr>
                    <td>Comissão</td>
                    <td>" . $this->comissao . "</td>
                </tr>
            </table>
        ";
    }
}