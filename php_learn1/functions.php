<!-- about Formating /Casing -->

<!-- Camel Case  = camelCase -->
<!-- Lower Case = lower_case -->
<!-- Pascal Case = Pascalcase -->

<?php

// function say_hello(){

//     echo "<h2>Hello there !</h2>";
//     echo "<br>";

// }

// function howru($name = "my friend"){

//     echo "<h3>How are you $name</h3>";
//     echo "<br>";
// }

// say_hello();
// howru();

// say_hello();
// howru('maheen');


///------ functions with return values

function say_hello(){

    return "<h2>Hello there !</h2>"."<br>";

}

function howru($name = "my friend"){

    return "<h3>How are you $name</h3>"."<br>";
}

// echo say_hello();
// echo howru();

// echo say_hello();
// echo howru('maheen');

/// -- arguments pass by value and pass by reference

function by_value($num1){
    $num1 = 0; //will not change th eactual value
}

function by_ref(&$num1){
    $num1 = 0; //will change the actual value

}

$my_num =22;

by_value($my_num);
echo "<h3>for pass by value = $my_num ( no change)</h3><br>";

by_ref($my_num);
echo "<h3>for pass by value = $my_num (chan ged !!)</h3><br>";



?>