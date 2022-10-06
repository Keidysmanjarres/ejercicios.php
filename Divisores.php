<?php
    /* Desarrolar un programa que determine los divisores de un número definido previamente.   */
    $Numero=8.0;
    echo "Divisores del número ".$Numero.": ";
    for ($i=1;$i<=$Numero;$i++){
        // mod (%) retorna el residuo de una división entera
        $Residuo=$Numero % $i;
        if($Residuo==0)
        {
            echo "[ ".$i. "] ";
        }
    }
?>