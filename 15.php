<?php
    $i=1;
    $maior=PHP_INT_MIN;
    for ($i=1; $i <=5; $i++) {
        print "Digite um número:\n";
        $num = fgets(STDIN);
        if ($num > $maior){
            $maior = $num;
        }
    }
    print $maior;