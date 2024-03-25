<?php
  session_start();

  $_SESSION['myFavFood'] = 'pizza';
  $_SESSION['myFavDrink'] = 'milk';
  $_SESSION['myFavColor'] = 'purple';

  #updating a session variable
  $_SESSION['myFavDrink'] = 'beer';

  #deleting a session variable
  unset($_SESSION['myFavColor']);