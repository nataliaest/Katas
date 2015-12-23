<?php

$resultado = sumar("//,\n2,8");

echo "El resultado de la suma es: " . $resultado;

function sumar($arg1 = 0){
    $suma = 0;
    
    if (($arg1[0] === '/') && ($arg1[1] === '/')){
        $simbolo = $arg1[2];
    }
    else{
        $pos = strpos($arg1, ",");
        if ($pos){
            $simbolo = ",";
        }
        else{
            $simbolo = "\n";
        }
    }
    $valores = explode($simbolo,$arg1);

    for ($i=0; $i < sizeof($valores); $i++){
        $suma = $suma + $valores[$i];
    }
    return $suma;
}

?>