<?php
    print "Digite um valor:\n";
    $valor=fgets(STDIN);
    if ($valor>0){
        print "O valor é positivo.\n";
    }
    else{
        print "O valor é negativo\n";
    }