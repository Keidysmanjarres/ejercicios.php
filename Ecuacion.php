<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <form method="post">
   <label>Deposita los digitos</label> <br>
   <input type="number" required name="numero1" min="0" max="99999">
   <input type="number" required name="numero2" min="0" max="99999">
   <input type="submit" value="enviar">
   </form>
</body>
</html>
<?php
if ($_POST){
$nnumero = $_POST['numero1'];
$nnumero2 = $_POST['numero2'];
$X=$nnumero;
$Z=$nnumero2;
$Y=$X*$Z+$Z+$X;
   echo "El resultado de $X y $Z. es: $Y ";
}
?>
