<?php

require_once "Pessoa.php";
require_once "Data.php";

class Cliente extends Pessoa{
    private Data $dataCadastro;
    private string $preferencias;

    public function __construct($nome, $cpf, $sexo, $dia, $mes, $ano, $preferencias){
        parent::__construct($nome, $cpf, $sexo, $dia, $mes, $ano);
        $this->dataCadastro = new Data(date('d'), date('m'), date('Y'));
        $this->preferencias = $preferencias;
    }
    
    public function getDataCadastro(){
        return $this->dataCadastro;
    }

    public function setDataCadastro($dataCadastro){
        $this->dataCadastro = $dataCadastro;
    }

    public function getPreferencias(){
        return $this->preferencias;
    }

    public function setPreferencias($preferencias){
        $this->preferencias = $preferencias;
    }

    public function imprimir(){
        echo "
            <table>
                " . parent::imprimir() . "
                <tr>
                    <td>Preferências</td>
                    <td>" . $this->preferencias . "</td>
                </tr>
                <tr>
                    <td>Data de cadastro</td>
                    <td>" . $this->dataCadastro->__tostring() . "</td>
                </tr>
            </table>
        ";
    }
}