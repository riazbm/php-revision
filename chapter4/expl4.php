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

//    for loop

   for ($i = 0; $i < 10; $i++)
   {
     echo $i;
     echo '<br>';
   }

//    foreach loop syntaxes

  //    foreach ($array as $value){
    //code }

  //    foreach ($array as $key => $value){
    //code }

    $arr1 = array(10,20,30,40,50);

    foreach ($arr1 as $num){
        echo 'the number is' .$num. '<br>';
    }

    $arr2 = array('Amini'=>12, 'feiz'=>45, 'kats'=>9);

    foreach($arr2 as $name=>$age){
        echo $name. 'is' .$age. 'years old <br>';
    }

    // while loop

    $d = 1;
    while ($d < 5){
        echo 'the value is' .$d. '<br>';
        $d++;
    }

    // do while loop

    $m = 100;
     do {
        echo 'the value is '.$m. '<br>';
        $m++;
     }
     while ($m < 110);
?>
