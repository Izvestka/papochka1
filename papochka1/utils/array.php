<?php

$numbers = [1, 2, 3, 6, 89];
//echo $numbers[4];
foreach($numbers as $x) {
    echo "$x </br>";
}
//$people = [
 //   ["A","1900"],
  //  ["B","1300"],
  //  ["C","1000"]
//];
//$i = 1;
//foreach($people as $per) {
//$name = $per[0];
//$number = $per[1];
 //   echo ("$i. $name from $number </br>");
  //  $i++;
//}

//$person1 = array("FirstName" => "Adam", "Lastname" => "Brr", "City" => "Moscow", "Salary" => 115);
//echo $person1['FirstName']." ".$person1['Lastname']." ".$person1['City']." ".$person1['Salary'];

$people = [array("FirstName" => "Adam", "Lastname" => "Brr", "City" => "Moscow", "Salary" => 115),
array("FirstName" => "Ana", "Lastname" => "Grr", "City" => "LA", "Salary" => 145),
array("FirstName" => "Amma", "Lastname" => "Drr", "City" => "Moscow", "Salary" => 195),

];
foreach($people as $person) {
    echo $person['FirstName']." ".$person['Lastname']." ".$person['City']." ".$person['Salary']."<br />";

}