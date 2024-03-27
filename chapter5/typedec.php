<?php
  declare(strict_types=1);
  function addNumbersStrict(int $num1, int $num2, int $num3){
    return $num1 + $num2 + $num3;
  }
  echo addNumbersStrict(9, 7, 3);
  echo '<br>';

  function addTwoNums($a, $b): int{
    return $a + $b;
  }
  echo addTwoNums(7, 3);