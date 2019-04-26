<?php
    print "Insira o valor de A: ";
    $a = fgets(STDIN);

    if ($a = 0) {
        print "\Não é uma equação de 2° Grau, porque A é igual a 0. \n";
    }

    else {
        print "Insira o valor de B: ";
        $b = fgets(STDIN);
        print "Insira o valor de C: ";
        $c = fgets(STDIN);
        $delta = pow($b,2) - 4 * $a * $c;
        if ($delta < 0) {
            print "A equação não possui raízes, pois Delta é negativo. ( Delta = $delta ). \n";
        }

        $x1 = (-$b + sqrt($delta)) / (2*$a);
        $x2 = (-$b - sqrt($delta)) / (2*$a);

        if ($delta = 0) {
            print "Por Delta = 0, há apenas uma raíz real. Sendo ela, igual a: x = $x1 \n";
        }
        if ($delta > 0) {
            print "Por Delta ser positivo, há duas raízes reais. Sendo elas: \n";
            print "Delta = $delta \n";
            print "X1 = $x1 \n";
            print "X2 = $x2 \n";
        }
    }