<?php
    print"Digite uma letra: ";
    $letra  = (string) fgetc (STDIN);

    if ($letra == 'A' or $letra == 'E' or $letra == 'I' or $letra == 'O' or $letra == 'U') {
        print "Essa letra é vogal \n";
    }

    else {
        print "Essa letra é consoante \n";
    }