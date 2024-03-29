<?php
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