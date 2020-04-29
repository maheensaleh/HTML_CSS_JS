<h1>
<?php
echo "<h1>if elseif else</h1>";
///--------------- CONDITIONALS

//  == ,=== ,!=, !== ,>,< ,<= ,>=

//IF, ELSEIF, ELSE

$a = 1;

if ($a==="1"){
    echo "$a is  a string";
}

elseif ($a == "1"){

    echo "$a is 1";
}

else{

    echo "pata nhi";
}

// <!-- and = &&/AND
//     or = || / OR
//      xor = XOR         
// -->

if (true AND true){
    echo "<br>";
    echo "and";

}
if (true OR false){
    echo "<br>";
    echo "or";
}

if (true XOR false){
    echo "<br>";
    echo "xor";
}



// ===============================

echo "<h1>Swith Case</h1>";


$name = "nxklas";

switch ($name){

    case "maheen";
    echo "correct";
    break;

    case "not maheen";
    echo "wrong";
    break;
    
    default:
    echo "pata nhi";

    }



?>
</h1>