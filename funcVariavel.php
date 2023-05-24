<?php
$var =10;
function acessandoGlobal(){
  echo$ var;
  global $var;
  echo $var;
}
