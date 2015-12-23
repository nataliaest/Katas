<?php

$resultado = sumar("//;\n3;2");

echo "El resultado de la suma es: " . $resultado;

function sumar($arg1 = 0){
    $suma = 0;
    
    try{
       excep($arg1);
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
    
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

function excep($valor){
    if ($valor < 0){
        throw new Exception('Negatives not allowed');
    }
}

?>