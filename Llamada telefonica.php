<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Llamadas</title>
</head>
<body>
   <form method="post">
   Ingrese un número:
   <input type="text" name="LlamadadT" maxlength="2" size="2"><br>
   <input type="submit" value="Valor.">
   </form>
</body>
</html>

<?php
$Llamada=$_POST['LlamadadT'];

if ($Llamada<=3){
   echo ("El valor de la llamada cuesta 200 pesos");
}
else{
   $Extra=$Llamada-3;
   $Subtotal=$Extra*30;
   $Total=$Subtotal+200;

   echo ("La duracion de la llamada fue de: ".$Llamada . " "."Minutos");
   echo "<br>";
   echo ("El cobro es de: " .$Total . " Pesos");
   
}
?>