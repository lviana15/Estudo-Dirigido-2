<?php
$a = 0;
$b = 1;
while($b=500){
    print "$b\n";
    $a = $b - $a;
    $b = $a + $b;
}