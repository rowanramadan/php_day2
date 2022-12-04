<?php
echo nl2br ("Rowan\n"); 

echo"Ramadan";
echo "<br>";
echo "****************";
echo "<br>";


$num = array(12, 45, 10, 25);
echo $num[0] . ", " . $num[1] . " , " . $num[2] . "," . $num[3];
echo "<br>";
echo"sum is";
echo array_sum($num);
echo "<br>";
echo"avg is";
echo $average = array_sum($num)/count($num);
echo "<br>";
 rsort($num);
$clength = count($num);
for($x = 0; $x < $clength; $x++) {
  echo $num[$x];
  echo "<br>";
}
echo "<br>";
echo "****************";
echo "<br>";


$age = array("sara"=>"31", "jhon"=>"37", "walaa"=>"39", "ramy"=>"40");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";
echo "****************";
echo "<br>";

$age = array("sara"=>"31", "jhon"=>"37", "walaa"=>"39", "ramy"=>"40");
rsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";
echo "****************";
echo "<br>";
$age = array("sara"=>"31", "jhon"=>"37", "walaa"=>"39", "ramy"=>"40");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


echo "<br>";
echo "****************";
echo "<br>"; 
$age = array("sara"=>"31", "jhon"=>"37", "walaa"=>"39", "ramy"=>"40");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


?>





















