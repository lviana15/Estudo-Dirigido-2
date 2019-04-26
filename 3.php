<?php
    print "Digite o sexo (F/M): \n";
    $sexo = fgetc (STDIN);

    if ($sexo == 'M') {
        print "$sexo corresponde ao sexo Masculino. \n";
    }
    elseif ($sexo == 'F') {
        print "$sexo corresponde ao sexo Feminino. \n";
    }
    else {
        print "Sexo Inválido \n";
    }