<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require_once "./class/Cliente.php";
        require_once "./class/Vendedor.php";
        require_once "./class/Produto.php";
        require_once "./class/Pedido.php";
        require_once "./class/ItemPedido.php";

        $cliente1 = new Cliente("João Silva", "123456789-10", "M", 16, 5, 1978, "Camisas e bonés");
        $cliente2 = new Cliente("Maria Soares", "987654321-01", "F", 23, 9, 1998, "Vestidos longos");

        $vendedor1 = new Vendedor("Pedro Pereira", "3579514862-12", "M", 12, 11, 2000, 1412.12, 5);
        $vendedor2 = new Vendedor("Joaquim", "123789456-90", "M", 5, 12, 2001, 1534.60, 12.7);

        $produto1 = new Produto(123, "Camisa branca", 75.50);
        $produto2 = new Produto(456, "Boné HIGH", 32.40);

        $pedido1 = new Pedido($cliente1, $vendedor1, $produto1, 1);
        $pedido1->imprimirPedidoCompleto();

        $itemPedido1 = new ItemPedido($produto2, 2);
        $pedido1->adicionarItem($itemPedido1);
        $pedido1->imprimirPedidoCompleto();
        $pedido1->fecharPedido();
    ?>
</body>
</html>