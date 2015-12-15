<?php

$resultado = sumar("2\n3");

echo "El resultado de la suma es: " . $resultado;

function sumar($arg1 = 0){
    $suma = 0;
    
    $pos = strpos($arg1, ",");
    if ($pos){
        $simbolo = ",";
    }
    else{
        $simbolo = "\n";
    }
        
    $valores = explode($simbolo,$arg1);

    for ($i=0; $i < sizeof($valores); $i++){
        $suma = $suma + $valores[$i];
    }
    return $suma;
}

?>