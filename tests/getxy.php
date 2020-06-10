<?php

$a = [2,3];
$b = [2,4];

echo '<br /> Respuesta: ' . getTotalX($a,$b);

function getTotalX($a, $b) {
    $nEnteros = 0;

    for($i=1;$i< 100;$i++){
        for($j=0;$j < count($a);$j++){
            if($i%$a[$j]==0){
                echo '<br />' . $i;
                $bCount=0;
                for($k=0;$k < count($b);$k++){
                    if($b[$k]%$i == 0){
                        echo $i . ' % ' . $a[$j] . '== 0 AND ' . $b[$k] . ' % ' . $i . '== 0' . '<br />';
                        $nEnteros++;
                    }
                }
            }
        }
    }

    return $nEnteros;

}

?>