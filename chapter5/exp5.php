<?php
  function displayGreetings(){
    echo "hello";
    echo '<br>';
  }

  function displayGreetings2($name, $message){
    echo "Hello $name, $message";
    echo '<br>';
  }
  displayGreetings2('Dlscar', 'good morning');

  function displayGreeting3($name, $message = 'have a good day'){
    echo "Hello $name, $message";
    echo '<br>';
  }
  displayGreeting3('Dlscar');
  displayGreeting3('Dlscar', 'how are you?');

  function addNumbers($num1, $num2, $num3){
    return $num1 + $num2 + $num3;
     
  }
