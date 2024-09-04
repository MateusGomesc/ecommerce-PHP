<?php

require_once "Cliente.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Data.php";
require_once "Produto.php";

class Pedido{
    private Data $data;

    /**
     * @var ItemPedido[]
     */
    private $items;
    private Cliente $cliente;
    private Vendedor $vendedor;
    private float $valorTotal;

    public function __construct(Cliente $cliente, Vendedor $vendedor, Produto $item, $quantidade){
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        $this->items = array(new ItemPedido($item, $quantidade));
        $this->data = new Data(date('d'), date('m'), date('Y'));
    }
    
    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }

    public function getVendedor(){
        return $this->vendedor;
    }

    public function setVendedor($vendedor){
        $this->vendedor = $vendedor;
    }

    public function getItems(){
        return $this->items;
    }

    public function setItems($items){
        $this->items = $items;
    }

    public function getValorTotal(){
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
    }

    public function adicionarItem($item){
        array_push($this->items, $item);
        echo "Valor Total: R$" . number_format($this->calcularValorTotal(), 2, ",", ".") . "<br>";
    }

    private function calcularValorTotal(){
        $soma = 0;
        foreach($this->items as $item)
            $soma += $item->getValor() * $item->getQuantidade();
        return $soma;
    }

    private function adicionarComissao(){
        $valorTotal = $this->calcularValorTotal();
        return $valorTotal + $valorTotal * ($this->vendedor->getComissao() / 100);
    }

    public function fecharPedido(){
        echo "Pedido fechado.";
        echo "
            <table>
                <tr>
                    <th>Nota fiscal</th>
                </tr>
                <tr>
                    <td>Data da compra</td>
                    <td>" . $this->data->__tostring() . "</td>
                </tr>
                <tr>
                    <td>Cliente</td>
                    <td>" . $this->cliente->getNome() . "</td>
                </tr>
                <tr>
                    <td>Vendedor</td>
                    <td>" . $this->vendedor->getNome() . "</td>
                </tr>";
        foreach($this->items as $item)
            echo "
                <tr>
                    <td>" . $item->getItem()->getNome() . "</td>
                    <td>" . $item->getValor() * $item->getQuantidade() . "</td>
                </tr>
            ";
        echo    "<tr>
                    <td>Valor Total dos produtos</td>
                    <td>R$" . number_format($this->calcularValorTotal(), 2, ",", ".") . "</td>
                </tr>
                <tr>
                    <td>Valor Total da compra</td>
                    <td>R$" . number_format($this->adicionarComissao(), 2, ",", ".") . "</td>
                </tr>
            </table>
        ";
    }

    public function imprimirPedidoCompleto(){
        echo "
            <table>
                <tr>
                    <th>Nota fiscal</th>
                </tr>
                <tr>
                    <td>Data da compra</td>
                    <td>" . $this->data->__tostring() . "</td>
                </tr>
                <tr>
                    <td>Cliente</td>
                    <td>" . $this->cliente->getNome() . "</td>
                </tr>
                <tr>
                    <td>Vendedor</td>
                    <td>" . $this->vendedor->getNome() . "</td>
                </tr>";
        foreach($this->items as $item)
            echo "
                <tr>
                    <td>" . $item->getItem()->getNome() . "</td>
                    <td>" . $item->getValor() * $item->getQuantidade() . "</td>
                </tr>
            ";
        echo    "<tr>
                    <td>Valor total</td>
                    <td>R$" . number_format($this->calcularValorTotal(), 2, ",", ".") . "</td>
                </tr>
            </table>
        ";
    }
}