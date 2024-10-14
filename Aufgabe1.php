<!Doctype html>
<html>

</html>
<style>
</style>   
<p> Gib die Zahl ein: </p>

<form action="Aufgabe1.php" method="GET">
Eingabe: <input type="text" name="name"><br>

<input type="submit">

<?php
include "meineFunktionen.php";
echo "<p> Farbanpassung</p>";
farbanpassung(name);
echo $_GET["name"];

echo "<a href=\"/index.php\"> zurück</a>";
?>