<?php session_start(); 
    //session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_tienda.css" type="text/css" rel="stylesheet">
    <title>Tienda</title>
</head>
<body>
    <div id="titulo_pag">
        <ul>
            <li><h1>Valentinos S.A de C.V.</h1></li>
            <li><a href="listacompras.php">Carrito</a></li>
            <li><a href="inicio.html">Salir</a></li>
        </ul>
    </div>
    <div id="contenedor_productos">
        <div class="producto">
            <img src="cajamascota.png">
            <h1>Transportadora Kennel</h1>
            <p>Medidas de 45x30x29 apta para Perros Y Gatos.</p>
            <p>precio: $290 MXN</p>
            <form action="tienda.php" method="post">
                <input type="number" name="cantidad" value="1">
                <input type="hidden" name="nProducto" value="cajamascotas">
                <input type="hidden" name="precio" value="290">
                <input type="submit" value="Ordenar" name="Comprar">
            </form>
        </div>
        <div class="producto">
            <img src="cortauna.png">
            <h1>Paquete Cortauñas Paw Perfect</h1>
            <p>Cortauñas para mantener las uñas de tu perro perfectamente recortadas.</p>
            <p>precio: $599 MXN</p>
            <form action="tienda.php" method="post">
                <input type="number" name="cantidad" value="1">
                <input type="hidden" name="nProducto" value="cortauna">
                <input type="hidden" name="precio" value="599">
                <input type="submit" value="Ordenar" name="Comprar">
            </form>
        </div>
        <div class="producto">
            <img src="platos.png">
            <h1>Comedero Bebedero Pará Mascotas Alta Calidad</h1>
            <p>Práctico y fácil de usar, hecho de material resistente, ideal para perros o gatos</p>
            <p>precio: $749 MXN</p>
            <form action="tienda.php" method="post">
                <input type="number" name="cantidad" value="1">
                <input type="hidden" name="nProducto" value="platos">
                <input type="hidden" name="precio" value="749">
                <input type="submit" value="Ordenar" name="Comprar">
            </form>
        </div>
      

        
    </div>
    <?php
    if(isset($_REQUEST["Comprar"])) {
        $producto = $_REQUEST["nProducto"];
        $cantidad = $_REQUEST["cantidad"];
        $precio = $_REQUEST["precio"];

        echo "<script> alert('Producto $producto agregado con éxito al carrito de compras.');</script>";

        if (isset($_SESSION["carrito"])) {
            $aux = array();
            foreach ($_SESSION["carrito"] as $productoAux => $datos) {
                array_push($aux, $productoAux);
            }
            if (in_array($producto, $aux)) {
                $_SESSION["carrito"][$producto]["cantidad"] += $cantidad;
            } else {
                $_SESSION["carrito"][$producto]["cantidad"] = $cantidad;
                $_SESSION["carrito"][$producto]["precio"] = $precio;
            }
        } else {
            $_SESSION["carrito"][$producto]["cantidad"] = $cantidad;
            $_SESSION["carrito"][$producto]["precio"] = $precio;
        }
    }
    
?>
</body>



</html>