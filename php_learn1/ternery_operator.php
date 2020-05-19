<?php 
// terneray operator is a short hand for making conditional statements 

// as follows

$a = true;
$b = false;

$final = (($a==true) ? 
    ($b==false ?  "yess":"noo")
    :("nops"));

echo "result is $final";


?>