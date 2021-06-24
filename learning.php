<?php 

echo("Hello World");

$a=4;
$b=10;

echo "<br>".$a;

echo "<h1 style='color:red'>Heading 1</h1>";

if($a>0)
{
    echo "<br> Positive";
}

// This is  a comment

for($i=0;$i<10;$i++)
{
    echo "<br>".$i;
}
// print first 10 even numbers

$j=0;
while($j<10)
{
    echo "<br> While loop:".$j;
    $j++;
}
// in php array is key value pair
// indexing 0,1,2
$shopping = Array("Eggs"=>"4 sets","Bread"=>"3 packets");
echo "<br> Value of eggs ".$shopping["Eggs"];
echo "<br>".$shopping["Bread"];

print_r($shopping);
//print_r($a);

// isset() checks if the variable is defined or not
// if not defined it return false else true

if(isset($a))
{
    echo "<br> defined";
}
else
{
    echo "<br> Not defined";
}

session_start();
echo "<br>".$_SESSION['username'];
?>