<?php
$onoroff = $_GET["state"];
$textfile = "LEDstate.txt";

$fileLocation = "$textfile";
$fh = fopen($fileLocation, 'w  ') or die("Text file couldn't open!"); // Open up the text
$stringToWrite = "$onoroff"; // Write either 1 or 0 depending on request from light.html
fwrite($fh, $stringToWrite);
fclose($fh);

header("Location: light.html"); 
?>
