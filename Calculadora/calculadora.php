<?php

$resultado = sumar("//;\n1002;1");

echo "El resultado de la suma es: " . $resultado;

function sumar($arg1 = 0){
    $suma = 0;
    
    try{
       excep($arg1);
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
    
    
    
    $simbolo = obtenerSimbolo($arg1);
    
    $valores = explode($simbolo,$arg1);

    for ($i=0; $i < sizeof($valores); $i++){
        if ($valores[$i] > 1000)
        {
            $valores[$i] = 0;
        }
        $suma = $suma + $valores[$i];
    }
    return $suma;
}

function obtenerSimbolo($sValor){
    if (($sValor[0] === '/') && ($sValor[1] === '/')){
        $simbolo = $sValor[2];    
    }
    else{
        $pos = strpos($sValor, ",");
        if ($pos){
            $simbolo = ",";
        }
        else{
            $simbolo = "\n";
        }
    }
    return $simbolo;
}

function excep($valor){
    if ($valor < 0){
        throw new Exception('Negatives not allowed');
    }
}

?>