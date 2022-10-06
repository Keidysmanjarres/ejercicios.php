<!-- Realizar un algoritmo con funciones que en la primera opcion cargue 
e imprima vectores, en la segunda opción cargue e imprima matrices    -->
<html>
    <head> <title> Menú de arreglos</title> </head>
    <body>
        <!-- Elaboramos un formulario HTML usando el metodo Post -->
        <form method="POST">
            <label>Seleccione una opción</label>
            <input type="radio" value=1 name="opcion" required> Vectores 
            <input type="radio" value=2 name="opcion" required> Matrices
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

<?php 
    if  ($_POST){
        $opcion=$_POST['opcion'];
        // Usamos un switch para crear un menu que según el caso nos ejecute una opción
            switch($opcion){
                case 1:
                    echo "<strong>Vectores</strong><br><br>";
                    $vector1[0]=1; $vector[1]=2; $vector1[2]="3"; $vector1[3]='a';
$vector1[4]='Hola';
                    foreach ($vector1 as $valor )
                        echo $valor. "  ";

                    echo "<br><br><em>Otra forma<em> <br>";
                    $vector2['COLOMBIA']='BOGOTA'; $vector2['VENEZUELA']='CARACAS';
                    $vector2['CHILE']="SANTIAGO"; $vector2['URUGAY']='MONTEVIDEO';
                    $vector2['PERU']='LIMA'; 
                    foreach ($vector2 as $valor )
                        echo $valor. "  ";

                    echo "<br><br><em>Otra forma<em> <br>";
                    $vector3=array(1,2,"3",'a','Hola');
                    foreach ($vector3 as $valor )
                        echo $valor. "  ";

                    echo "<br><br><em>Otra forma<em> <br>";
                    $vector4[]=1; $vector4[]=2; $vector4[]="3"; $vector4[]='a';
$vector4[]='Hola';
                    foreach ($vector4 as $valor )
                        echo $valor. "  ";
                break;


                    case 2:
                        echo "<strong>Matrices</strong><br><br>";
                        $matriz1[0][0]=1;    $matriz1[0][1]=2;
                        $matriz[1][0]="3";   $matriz[1][1]='a';
                        foreach ($matriz1  as  $filas  ){
                            foreach ($filas as  $celdas)
                                echo $celdas. "  ";
                            echo "<br>";
                        }

                        echo "<br><br><em>Otra forma<em> <br>";
                        $matriz2=array(array(1,2),array('a','3'));
                        $i=0;
                        for ($fil=0;$fil<2;$fil++){
                            for($col=0;$col<2;$col++)
                                echo $matriz2[$fil][$col];
                            echo "<br>";
                        }
                    
                        break;
                        default;
                            echo "error en el programa";
                        break;                                      

            }    
    }