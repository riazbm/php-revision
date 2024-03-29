<?php 
  function myDebugger($msg, $file, $line, $trace = ''){
    $message = $trace. '<br><br><strong>'.$msg. '</strong> found on <u>line' .$line. '</u> in file<u>'.$file.'</u>';

    if (ini_get('display_errors')){
        echo $message;
    }else {
        error_log($message);
        header('Location: error.html');
    }
  }
  