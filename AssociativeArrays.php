<?php

$student = array("first_name" => "Gayathri", "last_name" => "Buddhika", "age" => 20);

echo $student ["first_name"]."<br>";
echo $student ["first_name"]." ".$student["last_name"]."<br>";
echo $student["age"]." yrs old."."<br>";

$student ["age"] = 25;
echo $student ["age"]."<br>";

print_r($student);

?>