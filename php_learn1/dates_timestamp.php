 <h1>Date and Time Stamps</h1>

 <?php

echo "<h3 >dates</h3>";

 echo "date-day : ".date('d')."<br>";
 echo "date-month : ".date('m')."<br>";
 echo "date-year : ".date('y')."<br>";
 echo "date - day of week in number : ".date('w')."<br>";
 echo "date-weekday : ".date('l')."<br>";

 //setting date in your pattern

 echo "date is ".date("d-m-y")." and also ".date("y/m/d");

 echo "<h3 >times</h3>";

 //first set time
 echo date_default_timezone_get()."<br>";
 date_default_timezone_set("Asia/Karachi");
 echo date_default_timezone_get()."<br>";

 echo "time-sec : ".date('s')."<br>";
 echo "time-mins : ".date('i')."<br>";  // REMEBER "i" FOR MINUTES
 echo "time-hour : ".date('h')."<br>";
 echo "time-am / pm : ".date('a')."<br>";

 echo "time is ".date("h : i : s a")."<br>";

 //defimkne a time/date
$bday = mktime(12,0,0,12,5,1999);
echo "my birthday was : $bday";

//make  tie stamp from mktime
echo date("m-d-y",$bday);
echo "<br>";

echo "proper format through date function is : ".date("d-m-y",$bday)." at ".date('h : i : s a',$bday);

//string to time : strtotime
$dt = strtotime("next monday");
$dt = strtotime("yesterday");
$dt = strtotime("-2 Months");

// look into documnetation for more date formating



echo "<br>";
echo date("m-d-y h:i:sa",$dt);


 ?>