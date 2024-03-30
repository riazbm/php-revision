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
  function myExceptionHandler($e){
    myDebugger($e->getMessage(), $e->getFile(), $e->getLine(), $e->getTraceAsString());
  }
  function myErrorHandler($errno, $errstr, $errfile, $errline){
    myDebugger($errstr, $errfile, $errline);
  }
  function myShutdownHandler(){
    $lastError = error_get_last();
    
    if (isset($lastError)){
        myDebugger($lastError['message'], $lastError['file'], $lastError['line']);
    }
  }