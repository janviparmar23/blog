<?php 
$msgs = "janvi";
echo "You have " . $msgs . " messages.";

echo "<br>";
 $mycounter = 1;
 $mystring = "Hello";
 $myarray = array("One", "Two", "Three");

 echo $myarray[2]; 

 $username = "Fred Smith";
 echo $username;
 echo "<br>";
 $current_user = $username;
 echo $current_user;

 echo "<br>";

 $author = "Brian W. Kernighan";
 echo <<<_END
 Debugging is twice as hard as writing the code in the first place.
 Therefore, if you write the code as cleverly as possible, you are,
 by definition, not smart enough to debug it.
 - $author.
_END;

echo "<br>";

$number = 12345 * 67890;
 echo substr($number,3, 1);

 echo "<br>";

 function longdate($timestamp)
 {
 return date("l F jS Y", $timestamp);
 }
 echo longdate(time());
 echo "<br>";
 echo longdate(time() - 17 * 24 * 60 * 60);

 echo "<br>";

 echo "a: [" . (20 > 9) . "]<br>";
 echo "b: [" . (5 == 6) . "]<br>";
 echo "c: [" . (1 == 0) . "]<br>";
 echo "d: [" . (1 == 1) . "]<br>";

 echo "<br>";
 $month = "March";
 if ($month == "March") echo "It's springtime";
 $a = "1000";
 $b = "+1000";
 if ($a == $b) echo "1";
 if ($a === $b) echo "2"; 
 if ($a != $b) echo "1";
 if ($a !== $b) echo "2";

 echo "<br>";
 
 echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
 
 
 echo "<br>";
 $a1 = "WILLIAM";
 $a2 = "henry";
 $a3 = "gatES";
 echo $a1 . " " . $a2 . " " . $a3 . "<br>";
 fix_names();
 echo $a1 . " " . $a2 . " " . $a3;
 function fix_names()
 {
 global $a1; $a1 = ucfirst(strtolower($a1));
 global $a2; $a2 = ucfirst(strtolower($a2));
 global $a3; $a3 = ucfirst(strtolower($a3));
 } 
 
 echo "<br>";
 echo '<pre>';
 $temp = explode(' ', "This is a sentence with seven words");
 print_r($temp);
 
 echo "<br>";
 
 
 
 echo "<br>";

?>