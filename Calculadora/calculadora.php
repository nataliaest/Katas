<?php

$resultado = sumar("");

echo "El resultado de la suma es: " . $resultado;

function sumar($arg1 = 0){
    $suma = 0;
    $valores = explode(",",$arg1);
    for ($i=0; $i < sizeof($valores); $i++){
        $suma = $suma + $valores[$i];
    }
    return $suma;
}

?>