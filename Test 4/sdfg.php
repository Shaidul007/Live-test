<?php

class Person {

    // attributes

    public $name;

    public $age;

    // constructor

    public function __construct( $name, $age ) {

        $this->name = $name;
        $this->age  = $age;

    }

    // method

    public function introduce() {
        echo "My name is " . $this->name . " and I am " . $this->age . " years old.";
    }

}

$person = new Person( "John", 30 );

$person->introduce();



class Student extends Person {
    public $mark;
    public function __construct( $name, $age, $mark ) {
        parent::__construct( $name, $age );
        $this->mark = $mark;
    }

    public function calculate_grade_percentage() {
        return "{$this->mark}%.";
    }
}

$student = new Student( "Robert", 18, "85" );

$student->introduce();

$gradePercentage = $student->calculate_grade_percentage();

echo "My grade percentage is {$gradePercentage}\n";