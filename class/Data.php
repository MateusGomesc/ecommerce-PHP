<?php

class Data{
    private int $dia;
    private int $mes;
    private int $ano;

    public function __construct($dia, $mes, $ano){
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function getDia(){
        return $this->dia;
    }

    public function setDia($dia){
        $this->dia = $dia;
    }

    public function getMes(){
        return $this->mes;
    }

    public function setMes($mes){
        $this->mes = $mes;
    }

    public function getAno(){
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    public function __tostring(){
        return str_pad($this->dia, 2, "0", STR_PAD_LEFT) . "/" . str_pad($this->mes, 2, "0", STR_PAD_LEFT) . "/" . str_pad($this->ano, 2, "0", STR_PAD_LEFT);
    }

    public function imprimirDataBanco(){
        return "$this->ano-$this->mes-$this->dia";
    }
}