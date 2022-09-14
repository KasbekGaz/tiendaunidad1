<?php
define('ADMIN', 'admin');
define('PASS_ADMIN', 'asd');
define('CLI', 'cliente');
define('PASS_CLI', '123');
//Oswaldo Lazaro Flores 17270676

$usuario = $_POST["usuario"];
$password = $_POST["palabra_secreta"];

if ($usuario == ADMIN && $password == PASS_ADMIN) {
    header("Location: dashboard.html");
} elseif ($usuario == CLI && $password == PASS_CLI){
    header("Location: tienda.php");
}else{
    echo '<script language="javascript">alert("Contraseña o usuario incorrectos");window.location.href="inicio.html"</script>';
}

?>