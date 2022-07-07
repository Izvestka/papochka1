<?php

$people = [
    array("FirstName" => "Adam", "Lastname" => "Brr", "City" => "Moscow", "Salary" => 115),
array("FirstName" => "Ana", "Lastname" => "Grr", "City" => "LA", "Salary" => 145),
array("FirstName" => "Amma", "Lastname" => "Drr", "City" => "Moscow", "Salary" => 195),
array("FirstName" => "Alana", "Lastname" => "Dpppr", "City" => "NY", "Salary" => 105),

];

$letters = $_REQUEST["letters"];
$results = []; 
foreach($people as $person) {
if (str_starts_with(strtolower($person["Lastname"]), $letters)) {
array_push($results, $person);
}

}

echo json_encode($results);