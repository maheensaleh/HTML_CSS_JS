<?php
 // ------------ LOOPS-------------------//
//  1 - for 
//  2 - while
//  3 - do while
//  4- for each


// ----- for loop -->

echo '<h1>For Loop</h1>';


for ($i=0;$i<=10;$i++){

    echo $i;
    echo '<br>';
}

// ------- while loop:

$a = 0;


echo '<h1>While Loop</h1>';

while ($a<=10){
    echo $a;
    echo '<br>';
    $a++;
}

/// do while 

$s = 10;
echo '<h1>Do While Loop</h1>';

do {
    echo $s;
    echo '<br>';
    $s-=1;
}

while ($s>=0);


/// for each -- specifically for arrays

// ------- for indexed arrays

echo '<h1>For Each</h1>';

$books = ['harry potter','little red riding hood','chochlate factory','matilda'];

foreach($books as $book){

    echo "<h3>$book</h3>";
    echo '<br>';

}


// for associative arrays
$bookes = ["harry potter"=>"JK Rowling", "Charlie and the Choclate Factory"=>"Roald Dahl","Peril At End House"=>"Agatha Christie"];

foreach($bookes as $book=>$author){

    echo "<h3>$book has been written by $author</h3>";
    echo "<br>";
}

?>

