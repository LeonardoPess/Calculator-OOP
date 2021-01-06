<?php
  declare(strict_types = 1);
  include_once '../classes/CalculatorInterface.php';

  $oper = $_POST['oper'];
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  $calc = new $oper();
  $calc->calcNow((int) $num1,(int) $num2);
