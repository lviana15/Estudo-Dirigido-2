<?php
    print "Digite o primeiro número: ";
    $num1= fgets (STDIN);
    print "Digite o segundo número: ";
    $num2= fgets (STDIN);
    print "Digite o terceiro número: ";
    $num3= fgets (STDIN);

    if ($num1 >  $num2 and $num1 > $num3 and $num2 >$num3) {
        print "O maior número é o: $num1 \n";
        print "O menor número é o: $num3 \n";
    }
    elseif ($num1 >  $num2 and $num1 > $num3 and $num3 > $num2) {
        print "O maior número é o: $num1 \n";
        print "O menor número é o: $num2 \n";
    }
    elseif ($num2 >  $num1 and $num2 > $num3 and $num1 > $num3) {
        print "O maior número é o: $num2 \n";
        print "O menor número é o: $num3 \n";
    }
    elseif ($num2 >  $num1 and $num2 > $num3 and $num3 > $num1) {
        print "O maior número é o: $num2 \n";
        print "O menor número é o: $num1 \n";
    }
    elseif ($num3 >  $num1 and $num3 > $num2 and $num2 > $num1) {
        print "O maior número é o: $num3 \n";
        print "O menor número é o: $num1 \n";
    }
    elseif ($num3 >  $num1 and $num3 > $num2 and $num1 > $num2) {
        print "O maior número é o: $num3 \n";
        print "O menor número é o: $num2 \n";
    }
    else {
        print "Dois ou mais números são iguais. \n";
}