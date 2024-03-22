<!-- comparison operators -->

<!-- equal(==)
identical(===)
not equal(!= or <>)
not identical(!==)
less than(<)
greater than(>)
less than or equal to(<=)
greater than or equal to(>=)
spaceship(<=>) -->

<!-- Logical Operators -->

<!-- and(&&)
or(||)
not(!!) -->

<!-- Control structures in PHP -->

<?php 
//   if statement
  
  $a = 7;
   if ($a<0)
   {
     echo 'if block<br>';
     echo '$a is smaller than 0';
   } 
   else if ($a < 5)
   {
     'first elseif block';
   }
   else 'false block';

//    ternary operator

   $x = (5==5 ? 'yes' : 'no');
   echo $x;
   echo "<br>";

//    switch statement

   $r = 20;

   switch ($r)
   {
     case 10:
        echo 'chocolate<br>';
        break;
     case 20:
        echo 'vanilla<br>';
        break;
     case 30:
        echo 'caramel<br>';
        break;
     default:
      echo 'strawberry<br>';
   }

?>
