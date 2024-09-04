<?php

require_once "Produto.php";

class ItemPedido{
    private Produto $item;
    private int $quantidade;
    private float $valor;

    public function __construct($item, $quantidade){
        $this->item = $item;
        $this->quantidade = $quantidade;
        $this->valor = $item->getValor();
    }
    
    public function getItem(){
        return $this->item;
    }

    public function setItem($item){
        $this->item = $item;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }
}