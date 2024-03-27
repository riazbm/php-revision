<?php
  session_start();
  echo '<br>Food: '.$_SESSION['myFavFood'];
  echo '<br>Drink: '.$_SESSION['myFavDrink'];
  echo '<br>Color: '.$_SESSION['myFavColor'];