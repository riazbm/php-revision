 <?php 
   define('basic_no', 12345);
   echo basic_no;
   echo "<br>";

//    variables and assigning them values
   $name = "Riaz";
   $age = 23;
   $address = "Bangalore";
   $city = "Bangalore";
   $state = "Karnataka";
   $country = "India";
   $x = 5;
   echo "the value is $x ";
   echo '<br>';
   echo "the age is $age";
   echo '<br>';

//    basic data types in php

   $a = 10;
   $b = 23.5;
   $c = true;

   var_dump($country);
   var_dump($a);
   var_dump($name);

//    Type casting 
   
   $b = (int)23.5;
   var_dump($b);
   $city = (boolean)"Bangalore";
   var_dump($city);
   echo "<br>";
   $state = (object)"Karnataka";
   echo '<br>';
   $c = (array)true;
   var_dump($c);
   var_dump($state);

//    operators in PHP

   $a = 10;           //assgnment operaator
   $a + $b;           //arithmetic operators
   $x = $x + 5;       //combined assignment operators

   $q = 3;            // increament and decreament operators
   echo "<br>$q<br>";
   echo ++$q;
   echo "<br>$a<br>";
   echo --$a;
 ?>  