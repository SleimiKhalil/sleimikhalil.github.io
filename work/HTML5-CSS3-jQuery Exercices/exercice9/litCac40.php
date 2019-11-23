<?php
  $path = "http://download.finance.yahoo.com/d/quotes.csv?s=%5EFCHI&f=l1";
  $yahooquote = fopen($path, "r");
  $line = fgets($yahooquote);
  echo "<br /><br />Le CAC 40 vaut ".$line. "points.";
  fclose($yahooquote);
?>