<?php
    $i=1;
    $soma=0;

    for($i=1; $i <=5; $i++){
        print"Digite um número:\n";
        $num=fgets(STDIN);
        $soma=$soma+$num;
    }

    $media = $soma / 5;
    print "A soma dos números é $soma\n";
    print "A média entre os números é $media\n";