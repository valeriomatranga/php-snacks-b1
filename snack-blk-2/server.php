<?php

$name= $_GET['name'];
//var_dump($name);

$invitati= ['vale','marco','giulia'];

if (in_array($name, $invitati)){
    echo "Benvenuto";
}else{
    echo " Non sei in lista";
}
?>


