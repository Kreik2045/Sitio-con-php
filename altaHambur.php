<?php

if(isset($_POST['ok'])){
    require_once('./classes/Hamburguesa.class.php');

$pan = $_POST['pan']; 
$condimento = $_POST['condimento']; 
$carne = $_POST['carne']; 
$bebida = $_POST['bebida']; 
$tamano = intval($_POST['tamano']);

$ticket1 = new Ticket($pan, $condimento, $carne, $bebida, $tamano);

$ticketjson = json_encode($ticket1, JSON_PRETTY_PRINT);

$archivo = __DIR__ . "/tickets.json";
if(!file_exists($archivo)){
    $file = fopen($archivo, "w");
    fwrite($file, "[\n");
}
else{
    $file = fopen($archivo, "c");
    fseek($file, -2, SEEK_END);
    fwrite($file, ",\n");
}

fwrite($file, $ticketjson);
fwrite($file, "\n]");
fclose($file);
header("refresh:1; url='gracias.html'");
}


else{
    echo "No esta permitido entrar directamente a esta pagina";
    header("refresh:5; url='Hamburguesas.php'");
}

?>

