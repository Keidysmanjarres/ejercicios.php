<?php
    /* Un programa que al capturar la edad de una persona diga si es          */
    /* Menor de edad (Menor de 18 años)                                       */
    /* Adulto (Mayor o igual a 18 años y menor a 60 años)                     */
    /* Adulto mayor (Mayor o igual a 60 años)                                 */
    /* Adicionalmente si la persona es mayor o igual a 18 años                */
    $edad=62;
    if ($edad<18) {
        print("La persona es menor de edad");
    }
    else if($edad<60){
        print("La persona es adulto");
    }   
    else{
        print("La persona es adulto mayor");
    }
?>

