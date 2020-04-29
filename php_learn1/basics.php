<!-- //can add html in a php file -->
<h1> this is htmml :))</h1>


<!-- echo is to print  -->
<?php  // these are php enclosing tags
echo "hi there";



// <!-----------------   VARIABLES--------------- -->

    // <!-- 
    // - starts with $
    // -$ is followed by a letter or underscore
    // -variable name has only letters numbers and underscores
    // -Case sensitive
    //  -->


$variable1 = 'maheen';
echo $variable1;
print $variable1;

// --------------------  DATA TYPES ----------

//     - strings
//     -integers
//     -floats
//     -boolean
//      -array
//      -NULL
//      -objects
//      -resources

$boolen_ = true;
$integer_ = 11;
$float_ = 40.05;


// concatenation method 1 :

echo $boolen_." ".$integer_." ".$float_;

//conacatenation methid 2:

echo " $boolen_ $integer_ and $float_";

echo " there's";

//escape sequence
echo " there\"s";

//defining constatnts

define("constant_my"," CONSTANT hi there");
echo constant_my;

//constants are also case sensitive by default
//to make the not case sensitive
define('MAHEEN', '   maheensaleh',true);
echo maheen;

?>




