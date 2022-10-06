<?php
/* Haga un programa que calcule el promedio de notas sabiendo que tienen un valor de 
30%, 30% y 40% respectivamente */
// Las variables en PHP llevan al inicio el signo $
$Nota1=4.0;
$Nota2=3.0;
$Nota3=3.8;
$Resultado=($Nota1*30)/100 + ($Nota1*30)/100 + ($Nota1*40)/100;
//Para concatenar en PHP usamos el punto (.)
echo ("El resultado es:" .$Resultado);
?>