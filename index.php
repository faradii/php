<!Doctype html>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body> 


<h1>
 Html Code
</h1>
<a href="/dashboard.html">Dashboard</a>
<br/>
</body>
 </html>

<?php
include "meineFunktionen.php";
echo " <h1> PHP CODE</h1>";

echo "<p> Addiererfunktion ergibt: <p/>";
$c=1;
Addierer($c); 


echo "<p> Lieblingsunktion ergibt: <p/>";

$x=lieblingsFunktion(5); 
echo $x;

echo "<a href=\"/dashboard.html\"> Shop</a>";

?>