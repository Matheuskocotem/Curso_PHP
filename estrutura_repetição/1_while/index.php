<?php 
$x = 4;
$limite = 30;

while($x > $limite) {
    echo "executando loop $x" . "\n";

    if ($x == 24) {
        echo "parando loop";
        break;
    }
    
    $x +=2;
}
?>