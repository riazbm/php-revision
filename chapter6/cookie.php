<?php
  setcookie('userName', 'Riazbm', time() + 120);

  #modifying a cookie
  setcookie('userAge', '23', time() + 3600);
  setcookie('userAge', '25', time() + 3600);

  #deleting a cookie
  setcookie('userLevel', 3, time() + 3600);
  setcookie('userLevel', 3, time() - 3600);

