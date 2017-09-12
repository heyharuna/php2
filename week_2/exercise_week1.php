<!-- Create a program:
1. Create a class
2. Extend the class from a parent class
3. Write a value in the class
4. Echo the new value
5. Create a method in the parent class called refProof()
6. Demonstrate that $a &= $b; links them
7. Abstract the parent class and make a "hasJob" method mandatory in child
8. Bonus: create a refProof() method in the child method such that it overrights the parent refProof, call the parent one inside the refProof() -->

<?php
  // 1. Create a class
  class Student {

    function sayName($StuName) {
      echo "<h2>".$StuName."</h2>";
    }

    function sayNationality($StuNationality) {
      echo "<h3>".$StuNationality."</h3>";
    }

    // function refProof() {
    //
    // }
  }

  class member extends Student {

    var $StuAge = "21";

    function sayAge() {
      echo "<h3>".$StuAge."</h3>";
    }
  }

  class Age {
    var $newAge;

    public function changeAge(&$newAge) {
      $this -> newAge = $newAge;
      echo "<h3>".$newAge."</h3>";
    }

  }

  $haruna = new member();
  $haruna -> sayName("Haruna");
  $haruna -> sayNationality("Japan");

  $harunaAge = new Age();
  $harunaAge -> changeAge();

?>
