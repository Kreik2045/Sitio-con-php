<?php

    require_once("./classes/Hamburguesa.class.php");
    $url = __DIR__ . "/tickets.json";
    $HamList = array();

    if(file_exists($url)){
       $HamJson = file_get_contents($url);

       $Hambs = json_decode($HamJson);

       foreach ($Hambs as $bur){
            $item = new Ticket(
                $bur->panes,
                $bur->carnitas,
                $bur->especial,
                $bur->bebida,
                $bur->tamano,
            );

            array_push($HamList, $item);
       }
    }

?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="hamburguesas.css">
    <meta charset="UTF-8">
    <title>Alta de Computadoras</title>
</head>
<body>
<div class="grid"> 
            <header>
                <div class="logo"> 
                    <img src="./Sitio/imagenes/logo2.png" alt="" class="logo">

                </div>
                <nav>
                    <a href="hamburguesas.php">HOME</a>
                    <a href="">ACERCA DE</a>
                    <a href="">CONTACTO</a>
                </nav> 
            </header>
    <section>
    <h1>.::HAMBURGUESAS EL PEPE::.</h1>
    <Form method="POST" action="altaHambur.php"> 
        <label for="pan">Tipo de pan:</label>
        <select name="pan">
            <option value="Mollete" selected> Pan de mollete </option>
            <Option value="Cristal"> Pan de Cristal </Option>
            <Option value="Multicereal/Rustico"> Pan multicereal o rústico </Option>
        </select>
        <br> <br>
        <legend for="condimento"> Salsa Especial de preferencia </legend>
            <input type="radio" name="condimento" value="BBQ" checked>
            <label for="condimento"> BBQ </label>
            <input type="radio" name="condimento" value="Ranch">
            <label for="condimento"> Ranch </label>
            <input type="radio" name="condimento" value="QuesoAzul">
            <label for="condimento"> Queso Azul </label>
            <input type="radio" name="condimento" value="Guacamole">
            <label for="condimento"> Guacamole  </label>
        <br> <br>  
            <legend> Clase de Hamburguesa </legend>
            <input type="radio" name="carne" value="Angus" checked>
            <label for="carne"> Hamburguesa de Angus </label>
            <input type="radio" name="carne" value="Wagyu">
            <label for="carne"> Hamburguesa de Wagyu (Kobe) </label>
            <input type="radio" name="carne" value="Pollo">
            <label for="carne"> Hamburguesa de pollo </label>
        <br> <br>
        <label for="bebida"> Tipo de bebida </label>
        <select name="bebida">
            <option value="Coca Cola"> Coca Cola </option>
            <option value="Pepsi"> Pepsi </option>
            <option value="7 Up"> Seven Up </option>
            <option value="Sprite"> Sprite </option>
            <option value="Fanta"> Fanta </option>
        </select>
        <br> <br>
        <label for="tamano"> Tamaño de bebida </label>
        <select name="tamano">
            <option value="600 Ml"> 600 ml </option>
            <option value="1 Litro y medio"> 1.5 litros </option>
            <option value="2 Litros y medio"> 2.5 litros </option>
            <option value="3 Litros"> 3 litros </option>
        </select>
        <br> <br>

    
        <input type="submit" name="ok" id="Registrar" href="gracias.html">
        <input type="reset" name="rst">
    </Form>
    <br> <br>
    <h1> Nuestras ultimas ordenes!!! </h1>
    <table border="1" cellspacing="0" cellpading="5"> 
        <tr> 
            <th>Tipo de Pan</th>
            <th>Salsa de preferencia</th>
            <th>Tipo de Carne</th>
            <th>Tipo de bebida</th>
            <th>Tamaño de bebida</th>
        </tr>
        <?php
        foreach ($HamList as $compu) {
           $compu->getHamb(); 
        }

        ?>
    </table>
</body>
</section>
<footer>
<p>&COPY; ElPepe! </p>   
</footer>
</div>

</html>