<?php
  include './awardWinMov.php';
  
  $awm = new awardWinMov('A1234', 'Max', 6.99, 'Best Picture');
  echo $awm->recommend('Japan');

  echo '<br>';
  echo $awm->displayHeading('H1');

  $mv = new movie('A3244', 'Golden Rose', 3.99, );
  echo $mv->displayHeading('h2');