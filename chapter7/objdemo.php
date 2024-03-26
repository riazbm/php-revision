<?php
  include './movie.php';
  $mov1 = new movie('N0001', 'Lusso', 4.9);
  $mov2 = new movie('P0002', 'Junior', 5.99);

  echo $mov1->title.'<br>';
  echo $mov2->conversion('Japan').'<br>';
  echo $mov1->displayHeading('H1');'<br>';
  $mov1->rentalPrice = 5.99;
  echo $mov1->rentalPrice.'<br>';
  $mov1->id = 'A12387';
  echo $mov1->id;


  echo movie::DISCOUNT.'<br>';
  echo $mov1::DISCOUNT.'<br>';
  echo $mov2::DISCOUNT.'<br>';