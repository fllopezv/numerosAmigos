<?php
$numero1 = 2620;
$numero2 = 2924;


$tiempoInicio = microtime(true);
$suma = 0;

    for($i=1;$i<$numero1;$i++){

             if($numero1%$i==0){

            $suma=$suma+$i;
         }
    }

    if($suma==$numero2){
       $suma=0;
       for($i=1;$i<$numero2;$i++){  
            if($numero2%$i==0){
               $suma=$suma+$i;
           }
       }

       if($suma==$numero1){
          echo 'Son numeros amigos';

       }else{
                 echo 'No son numeros amigos';
       }
    }        
    else{
              echo 'No son numeros amigos';
    }
   echo "<br>";
   $tiempoFin = microtime(true);
   $tiempoEjecucion = $tiempoFin - $tiempoInicio;
   $tiempoEnMilisegundos = $tiempoEjecucion * 1000;
   echo 'Tiempo de ejecución: ' . $tiempoEnMilisegundos . ' milisegundos';
?>