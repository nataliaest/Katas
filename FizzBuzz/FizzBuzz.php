<?php

    for ($i=1; $i<101;$i++){
        $division3 = $i % 3;
        $division5 = $i % 5;
        echo "hola";
        
        $posicion3 = strpos($i,"3");
        $posicion5 = strpos($i,"5");
        
        if (!$division3 && !$division5)
        {
            echo "FizzBuzz";
        }
        elseif (!$division3 || $posicion3 !==false) {
            echo "Fizz";
        }
        elseif (!$division5 || $posicion5 !==false) {
            echo "Buzz";
        }
        else{
            echo $i;   
        }
        echo "<br>";
    }  
?>