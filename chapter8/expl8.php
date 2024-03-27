<?php
  include './awardWinMov.php';
  $awm = new awardWinMov('A1234', 'Max', 6.99, 'Best Picture');
  echo $awm->recommend('Japan');