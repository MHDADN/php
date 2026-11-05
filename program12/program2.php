<?php
$names=array(
"s1"=>"sagil",
"s2"=>"adnan",
"s3"=>"sivani",
"s4"=>"hary");

echo"<center>";
echo"<h2>student list</h2>";
echo"<pre>";
print_r($names);
echo"</prev>";
asort($names);
echo"<h2>Ascending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</prev>";
arsort($names);
echo"<h2>ADescending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</prev>";
asort($names);
echo"</center>";
?>
