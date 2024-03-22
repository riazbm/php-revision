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
  echo "<br>";

  $str5 = 'is';  
  echo 'PHP'.$str5.'Fun<br>';
  echo 'PHP' . trim($str5) . 'Fun<br>';  //removes white space or any unwanted charaters incase of any

  $str6 = 'ABCDEF';
  ECHO substr($str6, 2,);
  echo "<br>";
  echo substr($str6, 2, 2);
  echo "<br>";
  echo substr($str6, -3);
  echo '<br>';

  // Using srings to represent dates

  echo strtotime("next monday");
  echo '<br>';
  echo date('d-M-Y', strtotime("+10 hours"));
  echo '<br>';
  date_default_timezone_set('America/New_York');


  // Creating arrays

  $firstArr = array();
  $secondArr = array(11, 16, 4, 9, 12);
  echo $secondArr[3];
  echo '<br>';
  $fruitArr = array('pineapple', 'apple', 'orange', 'banana');
  $assocArr = array(
    'Hamso' => 11, 
    'Kelly' => 16, 
    'Bakari' => 12, 
  );
  echo $assocArr['Hamso'];
  echo '<br>';
  $simpleMDArr = array(
    array(1,2,3,9,0),
    array(4,7,8,1,12),
    array(9,45,89,0)
  );
  echo $simpleMDArr[1][2];
  echo '<br>';

  // Displaying content of an array

  $myArray = array(2,2.4,'php',408);
  var_dump($myArray);
  echo '<br>';
  print_r($myArray);
  echo '<br>';

  // Adding elements to arrays

  $addDemo = array(0,9,8,7);
  $addDemo[] = 5;

  $addDemoAssoc = array('Duli'=>90, 'Madola'=>80, 'Time'=>688,);
  $addDemoAssoc['AbdulK'] = 7;

  // deleting elements from arrays

  $colors = array('brown','black','beidge','purple');
  array_splice($colors, 2);

// commonly used arrays
  // count();
  // array_search();
  // in_array();
  // array_merge();


?>