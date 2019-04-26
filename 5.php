<?php
    print "Digite a primeira nota:";
    $nota1 = fgets (STDIN);

    print "Digite a segunda nota:";
    $nota2 = fgets (STDIN);

    $media = ($nota1 + $nota2)/2;

    if ($media == 10) {
        print "Aprovado com distinção!";
    } elseif ($media >= 7) {
        print "Aprovado!";
    } else {
        print "Reprovado!";
    }