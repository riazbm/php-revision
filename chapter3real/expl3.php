<!-- Strings and Arrays (advanced dataTypes) -->

<?php
  $msg = 'hellow';
  $greeting = "Good morning";
  $emptyStr = "";

  $areacode = "(208)";
  $contact = '+1' . $areacode . '12345678';
  echo $contact;
  echo "<br>";

//   commonly used functions

  $strl = 'Good day!';
  echo strlen($strl);

  $str2 = 'Hello';
  $str3 = strtolower($str2);
  $str4 = strtoupper($str2);
  echo "<br>".$str2;
  echo "<br>".$str3;
  echo "<br>".$str4;
?>