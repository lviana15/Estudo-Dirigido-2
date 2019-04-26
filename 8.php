<?php
    print "Digite valor do  primeiro produto: ";
    $valor1= fgets (STDIN);
    print "Digite valor do segundo produto: ";
    $valor2= fgets (STDIN);
    print "Digite valor do terceiro produto: ";
    $valor3= fgets (STDIN);

    if ($valor1 <=  $valor2 and $valor1 <= $valor3) {
        print "Deve-se comprar o produto com valor de R$$valor1.\n";
    }
    elseif ($valor2 <=  $valor1 and $valor2 <= $valor3) {
        print "Deve-se comprar o produto com valor de R$$valor2.\n";
    }
    elseif ($valor3 <=  $valor1 and $valor3 <= $valor2) {
        print "Deve-se comprar o produto com valor de R$$valor3 .\n";
    }