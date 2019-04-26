<?php
    $i=1;
    $potencia=1;
    print "Digite a base para a potencia:\n";
    $base=fgets(STDIN);

    print "Digite o expoente para a potencia\n";
    $expoente=fgets(STDIN);

    for ($i=1; $i <=$expoente; $i++){
        $potencia=$potencia*$base;
    }

    print $potencia;