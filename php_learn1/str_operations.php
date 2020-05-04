<?php


// substr
$a = "hello world";
echo substr($a,2);
echo "<br>";
echo substr($a,3,7);

//strlen
echo "<br>".strlen($a);

//strpos

echo "<br>".strpos($a,"w");

//strrpos : to get the pos of last occurence
echo "<br>".strrpos($a,"o");

//trim: to remove white spaces at the end of string 
$q = "me         ";
echo "<br>before trim length is ".strlen($q);
$q = trim($q);
echo "<br>after trim length is ".strlen($q);

//strtoupper/strtolowerr
$lower  = "maheeen";
echo "<br> $lower upper is ".strtoupper($lower);
$upper  = "SALEH";
echo "<br>$upper lower is ".strtolower($upper);

//capitalize the first letter of each word
$sentence  = "my name is maheen";
echo "<br> Capitalized is ".ucwords($sentence);

//replace
$rep = "maheen";
echo "<br>replaced is ".str_replace("a","e",$rep);
echo "<br>replaced is ".str_replace("e","a",$rep);

//is_string

$no = 123;
$yes = "123";

if (is_string($no)){
    echo "<br> first string";
}


if (is_string($yes)){
    echo "<br> second string";
}

//compressing a astring

$longstring = "djenwnevjhbvnhebdcjhbjhbwvjhbdjenwnevjhbvnhebdcjhbjhbwvjhbdjenwnevjhbvnhebdcjhbjhbwvjhb
djenwnevjhbvnhebdcjhbjhbwvjhbdjenwnevjhbvnhebdcjhbjhbwvjhb
djenwnevjhbvnhebdcjhbjhbwvjhbdjenwnevjhbvnhebdcjhbjhbwvjhbdjenwnevjhbvnhebdcjhbjhbwvjhb
djenwnevjhbvnhebdcjhbjhbwvjhbdjenwnevjhbvnhebdcjhbjhbwvjhb
djenwnevjhbvnhebdcjhbjhbwvjhbdjenwnevjhbvnhebdcjhbjhbwvjhb";




$com_longstring = gzcompress($longstring);
echo "<br>compressed string is ".$com_longstring;

echo "<br>uncompressed is ",gzuncompress($com_longstring);
