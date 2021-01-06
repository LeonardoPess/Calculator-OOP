<?php

  // interface
  interface CalculatorInterface
  {
      public function calcNow(int $one, int $two);
  }

  class Add implements calculatorInterface
  {
    public function calcNow(int $one, int $two) {
      $this->num1 = $one;
      $this->num2 = $two;
      $result = $this->num1 + $this->num2;
      echo $result;
    }
  }

  class Sub implements calculatorInterface
  {
    public function calcNow(int $one, int $two) {
      $this->num1 = $one;
      $this->num2 = $two;
      $result = $this->num1 - $this->num2;
      echo $result;
    }
  }

  class Mul implements calculatorInterface
  {
    public function calcNow(int $one, int $two) {
      $this->num1 = $one;
      $this->num2 = $two;
      $result = $this->num1 * $this->num2;
      echo $result;
    }
  }

  class Div implements calculatorInterface
  {
    public function calcNow(int $one, int $two) {
      $this->num1 = $one;
      $this->num2 = $two;
      $result = $this->num1 / $this->num2;
      echo $result;
    }
  }

  //$oper = 'Div';
  //$num1 = 5;
  //$num2 = 2;