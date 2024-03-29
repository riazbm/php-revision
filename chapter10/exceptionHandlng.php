<?php
// trying to catch ecxeptions thrown by php
  try {
    include "./connect.php";
  }catch(PDOException $e){
    echo '<br>Unable to connect '.$e->getMessage();
  }catch(Exception $e){
    echo '<br>Something else happened '.$e->getMessage();
  }finally {
    echo '<br><br>The finally block is always excecuted';
  }
  echo '<br>After connecting';

//   throwing our own exceptions
function displayUserInput($userInput) {
    if ($userInput > 100){
        throw new OutOfRangeException('<br>User input is too big');
    }else {
        echo '<br>'.$userInput;
    }
}

try {
    displayUserInput(105);
}catch(OutOfRangeException $e){
    echo $e->getMessage();
}