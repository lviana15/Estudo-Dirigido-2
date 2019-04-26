<?php
    $i=1;
    $par=0;
    $impar=0;
    for ($i=1; $i <=10; $i++){
        print "Digite um número:";
        $num=fgets(STDIN);
        if ($num%2 ==0){
        $par=$par+1;
        }
        else{
            $impar=$impar+1;
        }
    }

    print "Numeros pares:$par";
    print "Numeros impares:$impar";