<?php
    session_start();
    //session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_tienda.css" type="text/css" rel="stylesheet">
    <title>Carrito</title>
</head>
<body>
<div id="titulo_pag">
        <ul>
            <li><h1>Articulos en su carrito: </h1></li>
            <li><a href="tienda.php">Regresar</a></li>
        </ul>
    </div>
    <div>
    <?php 
        $total = 0;
        $subtotal = 0;
        if(isset($_SESSION["carrito"])): ?>
            <table>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Costo por pieza</th>
                    <th>Subtotal</th>
                </tr>
                <?php foreach ($_SESSION["carrito"] as $indice => $arreglo):
                    $total += $arreglo["cantidad"] * $arreglo["precio"]; 
                    $subtotal = $arreglo["cantidad"] * $arreglo["precio"];?>
                    <tr>
                        <td><?= $indice; ?></td>
                        <?php foreach ($arreglo as $key => $value): ?>
                        <td><?= $value; ?></td>
                        <?php endforeach; ?>
                        <td><?= $subtotal; ?></td>
                    </tr>
                <?php endforeach; ?>
                    <tr>
                        <td colspan="3">Total</td>
                        <td><?= $total; ?></td>
                    </tr>
            </table>
            <?php else: ?>
                <h1>Carrito vacío</h1>
        <?php endif ?>   
        </table>
    </div>
</body>
</html>