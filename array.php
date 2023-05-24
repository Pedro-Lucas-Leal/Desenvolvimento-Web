<<?php
$pares=[2,4,6,8];
$pares=array(2,4,6,8);
$pares[0] = 2;
$pares[1] = 4;
$pares[2] = 6;
$pares[3] = 8;

$tamanho=count($pares);

for($i=0;$i <$tamanho;$i++){
  echo $pares[$i];
}
