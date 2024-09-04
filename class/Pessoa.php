<?php

require_once "Data.php";

abstract class Pessoa{
    private string $nome;
    private string $cpf;
    private string $sexo;
    private Data $dataNascimento;

    public function __construct($nome, $cpf, $sexo, $dia, $mes, $ano){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->dataNascimento = new Data($dia, $mes, $ano);
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function imprimir(){
        echo "
            <tr>
                <td>Nome</td>
                <td>" . $this->nome . "</td>
            </tr>
            <tr>
                <td>CPF</td>
                <td>" . $this->cpf . "</td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td>" . $this->sexo . "</td>
            </tr>
            <tr>
                <td>Data de nascimento</td>
                <td>" . $this->dataNascimento->__tostring() . "</td>
            </tr>
        ";
    }
}