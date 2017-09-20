
<?php
  class SystemCar {
    var $power = 0;

    function turnOn() {
      $this -> power = 1;
    }
    function turnOff() {

    }

  }

  class Car extends SystemCar {
    function car() {

    }
  }


?>
