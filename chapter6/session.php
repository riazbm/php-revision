<?php
  session_start();

  $_SESSION['myFavFood'] = 'pizza';
  $_SESSION['myFavDrink'] = 'milk';
  $_SESSION['myFAVColor'] = 'purple';

  #updating a session variable
  $_SESSION['myFavDrink'] = 'beer';

  #deleting a session variable
  unset($_SESSION['myFavColor']);