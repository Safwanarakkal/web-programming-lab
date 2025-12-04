<?php
$students=array("Arya","Anjela","Nandana","Theja","Thasni");
echo"<h2>Array Before Sorting:</h2>";
print_r($students);
echo "<br><br>";
asort($students);
echo"<h2>Array Ascending Sorting (asort):</h2>";
print_r($students);
echo"<br><br>";
arsort($students);
echo"<h2>After Descending Sorting(arsort):</h2>";
print_r($students);
?>
