<?php
    print "Digite um número inteiro menor que 1000: ";
    $num = (int) fgets(STDIN);

    if(strlen($num)==3){
        $cen = floor($num/100);
        $dez = floor(($num - ($cen *100))/10);
        $uni = $num - (($cen*100)+($dez*10));
        print "$cen\n";
        print "$dez\n";
        print "$uni\n";
        if ($num == 100){
            print "$num = $cen centena\n";
        }elseif($cen == 1 && $dez == 0 && $uni == 1){
            print "$num = $cen centena e $uni unidade\n";
        }elseif($cen==1 && $dez == 0 && $uni>1){
            print "$num = $cen centena e $uni unidades\n";
        }elseif($cen == 1 && $dez==1 && $uni == 0){
            print "$num = $cen centena e $dez dezena\n";
        }elseif($cen == 1 && $dez>1 && $uni == 0){
            print "$num = $cen centena e $dez dezenas\n";
        }elseif($cen == 1 && $dez == 1 && $uni>1){
            print "$num = $cen centena , $dez dezena e $uni unidades";
        }elseif($cen == 1 && $dez>1 && $uni == 1){
            print "$num = $cen centena , $dez dezenas e $uni unidade\n";
        }elseif($cen == 1 && $dez>1 && $uni>1){
            print "$num = $cen centena , $dez dezenas e $uni unidades\n";
        }


        elseif($cen>1 && $dez == 0 && $uni == 0){
            print "$num = $cen centenas\n";
        }elseif($cen>1 && $dez ==1 && $uni == 0){
            print "$num = $cen centenas e $dez dezena";
        }elseif($cen>1 && $dez == 1 && $uni == 1){
            print "$num = $cen centenas, $dez dezena e $uni unidade";
        }elseif($cen>1 && $dez == 1 && $uni>1){
            print "$num = $cen centenas, $dez dezena e $uni unidades";
        }elseif($cen>1 && $dez > 1 && $uni==0){
            print "$num = $cen centenas e $dez dezenas";
        }elseif($cen>1 && $dez > 1 && $uni==1){
            print "$num = $cen centenas , $dez dezenas e $uni uniadade";
        }elseif($cen>1 && $dez > 1 && $uni>1){
            print "$num = $cen centenas , $dez dezenas e $uni uniadades";
        }
    }


    if(strlen($num)==2){
        $dez = floor($num/10);
        $uni = $num - ($dez*10);
        print "$dez\n";
        print "$uni\n";

        if($num == 10){
            print "$num = $dez dezena\n";
        }elseif($dez == 1 && $uni == 1){
            print "$num = $dez dezena e $uni unidade";
        }elseif($dez == 1 && $uni >1){
            print "$num = $dez dezena e $uni unidades";
        }elseif($dez>1 && $uni == 0){
            print "$num = $dez dezenas";
        }elseif($dez>1 && $uni == 1){
            print "$num = $dez dezenas e $uni unidade";
        }elseif($dez>1 && $uni>1){
            print "$num = $dez dezenas e $uni unidades";
        }
    }


    if(strlen($num)==1){
        if($num == 1){
            print "$num = $num unidade";
        }elseif($num>1){
            print "$num = $num unidades";
        }
    }